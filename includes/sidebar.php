<div class="logo">
                    <a href="javascript:;" class="simple-text">
                      Your Logo
                    </a>
                </div>
                <ul class="nav">
                    <li class="<?php
                        if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'transaction') {
                            echo "nav-item active";
                        }
                    ?>">
                        <a class="nav-link" href="transaction.php">
                            <i class="nc-icon nc-icon nc-paper-2"></i>
                            <p>Transactions</p>
                        </a>
                    </li>
                    <li class="<?php
                        if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'office') {
                            echo "nav-item active";
                        }
                    ?>">
                        <a class="nav-link" href="./office.php">
                            <i class="nc-icon nc-bank"></i>
                            <p>Office</p>
                        </a>
                    </li>
                    <li class="<?php
                        if(basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'employee') {
                            echo "nav-item active";
                        }
                    ?>">
                        <a class="nav-link" href="./employee.php">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Employee</p>
                        </a>
                    </li>

                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="javascript:;">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Upgrade Plan</p>
                        </a>
                    </li>
                </ul>