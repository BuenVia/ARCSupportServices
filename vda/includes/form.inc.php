<?php 
                        require 'includes/dbh.inc.php';
                        if (isset($_GET['formId'])) {

                            $formId = $_GET['formId'];

                            $sql = "SELECT * FROM vdaform WHERE id=".$formId.";";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);
                
                            if ($resultCheck > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {

                                $sname = $row['surname'];
                                $fname = $row['fname'];
                                $claim = $row['claimNo'];
                                $policy = $row['policyId'];

                        }
                    }
                }
                        
                        ?>