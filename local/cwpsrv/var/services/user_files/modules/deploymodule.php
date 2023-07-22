<?php


session_start();
define('USERNAME',$_SESSION['username']);
define('USER_HOME_DIR','/home/'.USERNAME);
define('DEPLOY_DATABASE_PATH',USER_HOME_DIR."/deploydatabase.json");
  
$table_rows = '';

function getTable(){
 
$table_rows = '';
if (file_exists(DEPLOY_DATABASE_PATH)) {

    $file_content = file_get_contents(DEPLOY_DATABASE_PATH);
    $repositories = json_decode($file_content, true);
    if ($repositories === null && json_last_error() !== JSON_ERROR_NONE) {
        $repositories = [];
    }

    foreach ($repositories as $repo) {
        $table_rows .= "<tr>
            <td>{$repo['repository']}</td>
            <td>{$repo['branch']}</td>
            <td>{$repo['directory']}</td>
            <td>
                  
                <button class='btn-success btn' data-key='{$repo['key']}'><i class='fa fa-github'></i> Deploy</button>
                <button class='btn-danger btn' data-key='{$repo['key']}'>Delete</button>
            </td>
        </tr>";
    }
    return $table_rows;
}

}
function deployRepo($repo, $branch, $dir, $key = null) {
    $current_dir = getcwd(); // get current directory
    chdir($dir); // change to directory where you want to clone

    if ($key) {
        putenv("GIT_SSH_COMMAND=ssh -o StrictHostKeyChecking=no -i {$key}");
    }

    if(is_dir($dir . '/.git')) {
        // if directory already contains a git repository, pull from it
        $output = shell_exec("git pull");
    } else {
        // Clone the repository
        $output = shell_exec("git clone -b {$branch} {$repo} ."); // the '.' clones into the current directory
    }

    chdir($current_dir); // change back to the original directory

    return $output;
}


$table_rows = getTable();
if ($table_rows === '') {
    $table_rows = '<tr><td colspan="4">No repositories.</td></tr>';
}
$mod['table_rows'] = $table_rows;

if ($_GET['acc'] === 'refresh') {
    header('Content-Type: application/json');
    $mod['table_rows'] =  getTable();

    die;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json');
  if ($_GET['acc'] === 'addRepo') {
  
    $repo = $_POST['repository'];
    $branch = $_POST['branch'];
    $dir = $_POST['directory'];

    if (empty($repo)) {
        $mod['error'] = 'Repository URL is required.';
    } elseif (empty($branch)) {
        $mod['error'] = 'Branch is required.';
    } elseif (empty($dir)) {
        $mod['error'] = 'Directory is required.';
    } elseif (!filter_var($repo, FILTER_VALIDATE_URL) && !preg_match('/^git@github\.com:[^/]+\/[^/]+\.git$/', $repo)) {
        $mod['error'] = 'Repository URL is invalid.';
    }   elseif (!is_dir(USER_HOME_DIR . '/' . $dir)) {
        $mod['error'] = 'Directory does not exist.';
    } else {
        $unique_key = uniqid();

        $repository_data = [
            'key' => $unique_key,
            'repository' => $repo,
            'branch' => $branch,
            'directory' => $dir,
        ];

        if (file_exists(DEPLOY_DATABASE_PATH)) {
            $file_content = file_get_contents(DEPLOY_DATABASE_PATH);
            $current_data = json_decode($file_content, true);
            if ($current_data === null && json_last_error() !== JSON_ERROR_NONE) {
                $current_data = [];
            }
        } else {
            $current_data = [];
        }

        array_push($current_data, $repository_data);

        file_put_contents(DEPLOY_DATABASE_PATH, json_encode($current_data));
        $mod['table_rows'] = getTable();
        $mod['success'] = 'Your repository has been successfully added.';
        $mod['key'] = $unique_key;
    }

    echo json_encode($mod);
  die();
}


  if ($_GET['acc'] === 'delete') {
    $key = $_POST['key'];
    if (empty($key)) {
        $mod['error'] = 'Key is required.';
    } else {
        $file_content = file_get_contents(DEPLOY_DATABASE_PATH);
        $repositories = json_decode($file_content, true);
        if ($repositories === null && json_last_error() !== JSON_ERROR_NONE) {
            $repositories = [];
        }

        $repository_index = array_search($key, array_column($repositories, 'key'));
        if ($repository_index === false) {
            $mod['error'] = 'Invalid key.';
        } else {
            unset($repositories[$repository_index]);
            file_put_contents(DEPLOY_DATABASE_PATH, json_encode($repositories));
            $mod['success'] = 'Repository has been successfully deleted.';
        }
    }
    echo json_encode($mod);
    die();
}
if ($_GET['acc'] === 'deploy') {
    $key = $_POST['key'];
    if (empty($key)) {
        $mod['error'] = 'Key is required.';
    } else {
        $file_content = file_get_contents(DEPLOY_DATABASE_PATH);
        $repositories = json_decode($file_content, true);
        if ($repositories === null && json_last_error() !== JSON_ERROR_NONE) {
            $repositories = [];
        }

        $repository_index = array_search($key, array_column($repositories, 'key'));
        if ($repository_index === false) {
            $mod['error'] = 'Invalid key.';
        } else {
            $repository = $repositories[$repository_index];
            $output = deployRepo($repository['repository'], $repository['branch'], USER_HOME_DIR . '/' . $repository['directory']);
            if (strpos($output, 'fatal:') !== false) {
                $mod['error'] = 'An error occurred while deploying the repository: ' . $output;
            } else {
                $mod['success'] = 'Repository has been successfully deployed. Output: ' . $output;
            }
        }
    }
    echo json_encode($mod);
    die();
}

}
