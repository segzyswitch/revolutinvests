<?php
session_start();
// Remove active sessions
unset($_SESSION["maxamus_account_id"]);
unset($_SESSION["accnt_status"]);
// redirect to lign
header("Location: ../");
