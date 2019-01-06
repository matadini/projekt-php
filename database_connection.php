<?php


class DatabaseConnection {

    static function createDefaultConnection() {
        return new mysqli("localhost", "root", "", "projekt");
    }
}