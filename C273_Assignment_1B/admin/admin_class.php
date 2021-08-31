<?php

// session_start — Start new or resume existing session
session_start();

// Action
Class Action {

    private $db;

    public function __construct() {

        // ob_start — Turn on output buffering
        ob_start();
        include 'db_connect.php';

        $this->db = $conn;
    }

// destruct
    function __destruct() {
        $this->db->close();

        // ob_end_flush — Flush (send) the output buffer and turn off output buffering
        ob_end_flush();
    }

// login
    function login() {
        // extract — Import variables into the current symbol table from an array
        extract($_POST);

        $query = $this->db->query("SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "' ");
        if ($query->num_rows > 0) {
            foreach ($query->fetch_array() as $key => $value) {
                // is_numeric — Finds whether a variable is a number or a numeric string
                if ($key != 'password' && !is_numeric($key)) {
                    $_SESSION['login_' . $key] = $value;
                }
            }
            return 1;
        } else {
            return 3;
        }
    }

// login2
    function login2() {
        extract($_POST);
        $query = $this->db->query("SELECT * FROM users where username = '" . $email . "' and password = '" . sha1($password) . "' ");

        if ($query->num_rows > 0) {
            foreach ($query->fetch_array() as $key => $value) {
                if ($key != 'password' && !is_numeric($key)) {
                    $_SESSION['login_' . $key] = $value;
                }
            }
            return 1;
        } else {
            return 3;
        }
    }

// logout
    function logout() {

        // session_destroy — Destroys all data registered to a session
        session_destroy();
        foreach ($_SESSION as $key => $value) {
            unset($_SESSION[$key]);
        }
        // header — Send a raw HTTP header
        header("location:login.php");
    }

// logout2
    function logout2() {
        session_destroy();
        foreach ($_SESSION as $key => $value) {
            unset($_SESSION[$key]);
        }

        header("location:../index.php");
    }

// save_user
    function save_user() {
        extract($_POST);

        $data = " name = '$name' ";
        $data .= ", username = '$username' ";
        $data .= ", password = '$password' ";
        $data .= ", type = '$type' ";

        if (empty($id)) {
            $save = $this->db->query("INSERT INTO users SET " . $data);
        } else {
            $save = $this->db->query("UPDATE users SET " . $data . " WHERE id = " . $id);
        }
        if ($save) {
            return 1;
        }
    }

// save_message
    function save_message() {
        extract($_POST);

        $data .= ", vistor_name = '$name' ";
        $data .= ", vistor_email = '$email' ";
        $data .= ", vistor_subject = '$subject' ";
        $data .= ", vistor_message = '$message' ";


        if (empty($id)) {
            $save = $this->db->query("INSERT INTO messages SET " . $data);
        } else {
            $save = $this->db->query("UPDATE messages SET " . $data . " WHERE vistor_id = " . $id);
        }
        if ($save) {
            return 1;
        }
    }

     // signup
    function signup() {
        extract($_POST);

        $data = " name = '$name' ";
        $data .= ", contact = '$contact' ";
        $data .= ", address = '$address' ";
        $data .= ", username = '$email' ";
        $data .= ", password = '" . sha1($password) . "' ";
        $data .= ", type = 3";

        $check = $this->db->query("SELECT * FROM users WHERE username = '$email' ")->num_rows;

        if ($check > 0) {
            return 2;
            exit;
        }

        $save = $this->db->query("INSERT INTO users SET " . $data);

        if ($save) {
            $query = $this->db->query("SELECT * FROM users WHERE username = '" . $email . "' AND password = '" . sha1($password) . "' ");
            if ($query->num_rows > 0) {
                foreach ($query->fetch_array() as $key => $value) {
                    if ($key != 'password' && !is_numeric($key)) {
                        $_SESSION['login_' . $key] = $value;
                    }
                }
            }
            return 1;
        }
    }

    // save settings
    function save_settings() {

        extract($_POST);

        // The str_replace() function replaces some characters with some other characters in a string.
        $data = " name = '" . str_replace("'", "&#x2021;", $name) . "' ";
        $data .= ", email = '$email' ";
        $data .= ", contact = '$contact' ";

        // htmlentities - Convert some characters to HTML entities
        $data .= ", about_content = '" . htmlentities(str_replace("'", "&#x2021;", $about)) . "' ";

        if ($_FILES['img']['tmp_name'] != '') {

            // strtotime - Parse English textual datetimes into Unix timestamps:
            $file_name = strtotime(date('y-m-d H:i')) . '_' . $_FILES['img']['name'];

            // move_uploaded_file — Moves an uploaded file to a new location
            $move = move_uploaded_file($_FILES['img']['tmp_name'], '../assets/img/' . $file_name);
            $data .= ", cover_img = '$file_name' ";
        }


        $check = $this->db->query("SELECT * FROM system_settings");

        if ($check->num_rows > 0) {
            $save = $this->db->query("UPDATE system_settings SET " . $data);
        } else {
            $save = $this->db->query("INSERT INTO system_settings SET " . $data);
        }

        if ($save) {
            $query = $this->db->query("SELECT * FROM system_settings LIMIT 1")->fetch_array();

            foreach ($query as $key => $value) {
                if (!is_numeric($key)) {
                    $_SESSION['setting_' . $key] = $value;
                }
            }

            return 1;
        }
    }

    function save_category() {
        extract($_POST);

        $data = " name = '$name' ";

        if (!empty($_FILES['img']['tmp_name'])) {

            // strtotime — Parse about any English textual datetime description into a Unix timestamp
            $file_name = strtotime(date("Y-m-d H:i")) . "_" . $_FILES['img']['name'];

            // The move_uploaded_file() function moves an uploaded file to a new destination.
            $move = move_uploaded_file($_FILES['img']['tmp_name'], '../assets/img/' . $file_name);

            if ($move) {
                $data .= ", img_path = '$file_name' ";
            }
        }
        if (empty($id)) {
            $save = $this->db->query("INSERT INTO medical_specialty SET " . $data);
        } else {
            $save = $this->db->query("UPDATE medical_specialty SET " . $data . " WHERE id=" . $id);
        }
        if ($save) {
            return 1;
        }
    }

    function delete_category() {

        extract($_POST);

        $delete = $this->db->query("DELETE FROM medical_specialty WHERE id = " . $id);
        if ($delete) {
            return 1;
        }
    }

    // save doctor
    function save_doctor() {
        extract($_POST);
        $data = " name = '$name' ";
        $data .= ", name_pref = '$name_pref' ";
        $data .= ", clinic_address = '$clinic_address' ";
        $data .= ", contact = '$contact' ";
        $data .= ", email = '$email' ";

        if (!empty($_FILES['img']['tmp_name'])) {

            $file_name = strtotime(date("Y-m-d H:i")) . "_" . $_FILES['img']['name'];
            $move = move_uploaded_file($_FILES['img']['tmp_name'], '../assets/img/' . $file_name);

            if ($move) {
                $data .= ", img_path = '$file_name' ";
            }
        }

        // implode - Join array elements with a string:
        $data .= " , specialty_ids = '[" . implode(",", $specialty_ids) . "]' ";
        if (empty($id)) {
            $save = $this->db->query("INSERT INTO doctors_list SET " . $data);
            $did = $this->db->insert_id;
        } else {
            $save = $this->db->query("UPDATE doctors_list SET " . $data . " WHERE id=" . $id);
        }

        if ($save) {
            $data = " username = '$email' ";

            if (!empty($password)) {
                $data .= ", password = '" . $password . "' ";
            }

            $data .= ", name = 'Dr." . $name . ', ' . $name_pref . "' ";
            $data .= ", contact = '$contact' ";
            $data .= ", address = '$clinic_address' ";
            $data .= ", type = 2";

            if (empty($id)) {
                $check = $this->db->query("SELECT * FROM users WHERE username = '$email ")->num_rows;

                if ($check > 0) {
                    return 2;
                    exit;
                }

                $data .= ", doctor_id = '$did'";

                $save = $this->db->query("INSERT INTO users SET " . $data);
            } else {

                $check = $this->db->query("SELECT * FROM users WHERE username = '$email' AND doctor_id != " . $id)->num_rows;
                if ($check > 0) {
                    return 2;
                    exit;
                }

                $data .= ", doctor_id = '$id'";
                $check2 = $this->db->query("SELECT * FROM users WHERE doctor_id = " . $id)->num_rows;

                if ($check2 > 0) {
                    $save = $this->db->query("UPDATE users SET " . $data . " WHERE doctor_id = " . $id);
                } else {
                    $save = $this->db->query("INSERT INTO users SET " . $data);
                }
            }
            return 1;
        }
    }

    // delete doctor
    function delete_doctor() {
        extract($_POST);
        $delete = $this->db->query("DELETE FROM doctors_list WHERE id = " . $id);
        if ($delete) {
            return 1;
        }
    }

    // save schedule
    function save_schedule() {
        extract($_POST);
        foreach ($days as $key => $value) {

            $data = " doctor_id = '$doctor_id' ";
            $data .= ", day = '$days[$key]' ";
            $data .= ", time_from = '$time_from[$key]' ";
            $data .= ", time_to = '$time_to[$key]' ";

            if (isset($check[$key])) {
                if ($check[$key] > 0) {
                    $save[] = $this->db->query("UPDATE doctors_schedule SET " . $data . " WHERE id =" . $check[$key]);
                } else {
                    $save[] = $this->db->query("INSERT INTO doctors_schedule SET " . $data);
                }
            }
        }

        if (isset($save)) {
            return 1;
        }
    }

    // set appointment
    function set_appointment() {
        extract($_POST);

        $doctor = $this->db->query("SELECT * FROM doctors_list WHERE id = " . $doctor_id);
        $schedule = date('Y-m-d', strtotime($date)) . ' ' . date('H:i', strtotime($time)) . ":00";
        $day = date('l', strtotime($date));
        $time = date('H:i', strtotime($time)) . ":00";
        $doctor_scheduled_check = $this->db->query("SELECT * FROM doctors_schedule WHERE doctor_id = $doctor_id AND day = '$day' AND ('$time' BETWEEN time_from AND time_to )");

        if ($doctor_scheduled_check->num_rows <= 0) {
            return json_encode(array('status' => 2, "msg" => "Appointment schedule is not valid for the doctor's schedule selected."));
            exit;
        }

        $data = " doctor_id = '$doctor_id' ";
        if (!isset($patient_id)) {
            $data .= ", patient_id = '" . $_SESSION['login_id'] . "' ";
        } else {
            $data .= ", patient_id = '$patient_id' ";
        }

        $data .= ", schedule = '$schedule' ";
        if (isset($status)) {
            $data .= ", status = '$status' ";
        }

        if (isset($id) && !empty($id)) {
            $save = $this->db->query("UPDATE appointment_list SET " . $data . " WHERE id = " . $id);
        } else {
            $save = $this->db->query("INSERT INTO appointment_list SET " . $data);
        }

        if ($save) {
            return json_encode(array('status' => 1));
        }
    }

    // delete appointment
    function delete_appointment() {
        extract($_POST);
        $delete = $this->db->query("DELETE FROM appointment_list WHERE id = " . $id);

        if ($delete) {
            return 1;
        }
    }

}
