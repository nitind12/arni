                                            <table class="table table-stripped">
                                                <tr class="default">
                                                    <th colspan="2">Our Programs</th>
                                                </tr>
                                                <?php foreach($program_in_numbers as $item){?>
                                                    <tr class="warning">
                                                        <td style="text-align: center;width: 8%; font-size: 15px; color: #FF9000">
                                                            <b><?php echo $item->TOTAL;?> </b>
                                                        </td>
                                                        <td>
                                                            <?php echo $item->COURSE_TYPE;?></b> Programs
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                        