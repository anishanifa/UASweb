<?php
    require "Koneksi.php";

    class Model
    {
        //MEMBER//
        public function getMember()
        {
            $sql = "SELECT * FROM member";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function deleteMember($id)
        {
            $sql = "DELETE FROM member WHERE id_member = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function setMember($nama, $username, $email, $password)
        {
            $sql = "INSERT INTO member (nama_member, username, email, password) VALUES ('$nama', '$username', '$email', '$password')";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function editMember($id, $nama, $username, $email, $password)
        {
            $sql = "UPDATE member SET nama_member = '$nama', username = '$username', email = '$email', password = '$password' WHERE id_member = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function getMemberById($id)
        {
            $sql = "SELECT * FROM member WHERE id_member = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }


        // PLANET //
        public function getPlanet()
        {
            $sql = "SELECT * FROM planet";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function deletePlanet($id)
        {
            $sql = "DELETE FROM planet WHERE id_planet = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function setPlanet($image, $planetarium, $revolusi, $rotasi)
        {
            $sql = "INSERT INTO planet (data_image, nama_planet, periode_revolusi, periode_rotasi) VALUES ('$image', '$planetarium', '$revolusi', '$rotasi')";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function editPlanet($id, $image, $planetarium, $revolusi, $rotasi)
        {
            $sql = "UPDATE planet SET data_image = '$image', nama_planet = '$planetarium', periode_revolusi = '$revolusi', periode_rotasi = '$rotas' WHERE id_planet = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function getPlanetById($id)
        {
            $sql = "SELECT * FROM planet WHERE id_planet = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }


        // BINTANG //
        public function getBintang()
        {
            $sql = "SELECT * FROM bintang";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function deleteBintang($id)
        {
            $sql = "DELETE FROM bintang WHERE id_bintang = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function setBintang($image, $konstelasi, $designation, $modern)
        {
            $sql = "INSERT INTO bintang (data_image, nama_konstelasi, nama_khas, nama_modern) VALUES ('$image', '$konstelasi', '$designation', '$modern')";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function editBintang($id, $image, $konstelasi, $designation, $modern)
        {
            $sql = "UPDATE bintang SET data_image = '$image', nama_konstelasi = '$konstelasi', nama_khas = '$designation', nama_modern = '$modern' WHERE id_bintang = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function getBintangById($id)
        {
            $sql = "SELECT * FROM bintang WHERE id_bintang = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        // GALAKSI //
        public function getGalaksi()
        {
            $sql = "SELECT * FROM galaksi";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function deleteGalaksi($id)
        {
            $sql = "DELETE FROM galaksi WHERE id_galaksi = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function setGalaksi($image, $galaxy, $constellation, $origin)
        {
            $sql = "INSERT INTO galaksi (data_image, nama_galaksi, nama_kostelasi, asal_nama) VALUES ('$image', '$galaxy', '$constellation', '$origin')";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function editGalaksi($id, $image, $galaxy, $constellation, $origin)
        {
            $sql = "UPDATE galaksi SET data_image = '$image', nama_galaksi = '$galaxy', nama_kostelasi = '$constellation', asal_nama = '$origin' WHERE id_galaksi = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }

        public function getGalaksiById($id)
        {
            $sql = "SELECT * FROM galaksi WHERE id_galaksi = '$id'";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            return $result;
        }


        // LOG //
        
    }
?>