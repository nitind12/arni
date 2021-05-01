<!-- For Single Course [FCSA] -->
<!-- For Single Course [FHM] -->
<div class="panel panel-default">                        
                                                                <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                                                    <h2 class="panel-title">
                                                                        <a class="collapsed titlesize" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?php echo $dept_.$loop1; ?>" aria-expanded="false" aria-controls="collapseOne">
                                                                            <?php echo "Faculty of Technology &amp; Sciences"; ?>
                                                                        </a>
                                                                    </h2>
                                                                </div>
                                                            <div id="collapse<?php echo $dept_.$loop1; ?>" class="panel-collapse collapse">
                                                              <div class="panel-body">
                                                              	<div class="table-responsive">          
												      				<table class="table" style="font-size: 13px">
															        <thead>
															          <tr>
															            <th>COURSE</th>
															            <th>COMPANY</th>
															            <th>DESIGNATION</th>
															            <th>STUDENT PLACED</th>
															            <th>YEAR</th>
															          </tr>
															        </thead>
															        <?php if($pl_FTS != 'yes' && $pl_FHM == $loop1){ ?>
															          	<tr>
															          		<td colspan="4" align="left" style="font-size: 15px; color: #ff0000">Updating...</td>
															          	</tr>
															        <?php } ?>
																        <?php foreach ($placement_FTS as $item) { ?>
														            		<?php if($item->YEAR == $loop1){ ?>
																	        <tbody>
																	          <tr>
																	            <td><?php echo $item->CRS_NAME;?></td>
																	            <td><?php echo $item->COMPANY;?></td>
																	            <td><?php echo $item->DESIG_PROFILE;?></td>
																	            <td><?php echo $item->STUDENT_PALCED;?></td>
																	            <td><?php echo $item->YEAR;?></td>
																	          </tr>
																	        </tbody>
																	        <?php } ?>
													            		<?php } ?>
															      </table>
														      	</div>
                                                              </div>
                                                            </div>
                                                          </div>
			        	<!-- End of Single Course [FHM] -->