<?php
include "../connection.php";
                    $email = $_SESSION['email'];
                    $getID = mysqli_query($con, "SELECT `id`, `name` FROM user_data WHERE email='$email'");
                    $find = mysqli_fetch_assoc($getID);
                    $id_user = $find["id"];
                    $output = "";
                    $list = "SELECT orders.id,orders.alamat,orders.nama,orders.jenis,orders.imgBefore,orders.imgAfter,orders.status, user_data.username, orders.tglOrder, order_details.longHours,order_details.cost FROM `orders` JOIN user_data ON user_data.id = orders.idDesigner JOIN order_details ON orders.id = order_details.idOrder WHERE idUser = '$id_user' AND (status = 2 OR status = 3 OR status = 4 OR status = 5 OR status = 6 OR status = 8)";
                    $action = mysqli_query($con, $list);
                    $i = 1;
                    while ($result = mysqli_fetch_assoc($action)){
                        
                        $output .= 
                        '
                        <tr id="'.$result['id'].'">
                        <td class="text-center">'.$i.'</td>
                        <td class="text-center">'.$result['tglOrder'].'</td>
                        <td class="text-center">'.$result['username'].'</td>
                        <td class="text-center">'.$result['nama'].'</td>
                        <td class="text-center">'.$result['alamat'].'</td>
                        <td class="text-center">'.$result['jenis'].'</td>
                        <td class="text-center">'.$result['longHours'].'</td>
                        <td class="text-center">'.$result['cost'].'</td>
                        <td class="text-center"><button id="'.$result['imgBefore'].'" type="button" data-bs-toggle="modal" data-bs-target="#modalBefore" class="btn btn-success befores">See Picture</button></td>
                        <td class="text-center"><button id="'.$result['imgAfter'].'" type="button" data-bs-toggle="modal" data-bs-target="#modalAfter" class="btn btn-success after">See Picture</button></td>
               
                             
                   

                        ';
                        if($result['status'] == 2){
                            $output.=

                            '
                            <td class="text-center">Bukti tf sedang dipriksa.</td>
                            <td class="text-center"><i class="fa-solid fa-xmark"></i></td>
                                                    </tr> 
                                 
                            
                            
                            ';

                        }else if($result['status'] == 3){
                            $output.=

                            '
                            <td class="text-center">Bukti tf sudah di setujui. Silahkan kirimkan pakaian anda.</td>
                            <td class="text-center" id="form'.$result['id'].'">
                            <button id="accept-'.$result['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#modalResi" class="btn btn-warning noresi">Input Resi</button></td>
                                                    </tr> 
                                 
                            
                            
                            ';

                        }else if($result['status'] == 4){
                            $output.=

                            '
                            <td class="text-center">Menunggu Paket sampai.</td>
                            <td class="text-center"><i class="fa-solid fa-xmark"></i></td>
                          
                                                    </tr> 
                                 
                            
                            
                            ';
                        }else if($result['status'] == 5){
                            $output.=

                            '
                            <td class="text-center">Paket telah sampai dan sedang di proses designer.</td>
                            <td class="text-center"><i class="fa-solid fa-xmark"></i></td>
                          
                                                    </tr> 
                                 
                            
                            
                            ';
                        }else if($result['status'] == 6){
                            $output.=

                            '
                            <td class="text-center">Paket selesai di proses dan menunggu dikirim.</td>
                            <td class="text-center"><i class="fa-solid fa-xmark"></i></td>
                          
                                                    </tr> 
                                 
                            
                            
                            ';
                        }else if($result['status'] == 8){
                            $output.=

                            '
                            <td class="text-center">Paket telah dikirim oleh desinger.</td>
                            <td class="text-center" id="form'.$result['id'].'">
                            <button id="done-'.$result['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#modalDone" class="btn btn-warning konfirm">Konfirmasi Sampai</button></td>
                          
                                                    </tr> 
                                 
                            
                            
                            ';
                        }
                        $i++;    
                    }

                    echo $output;?>