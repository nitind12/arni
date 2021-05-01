<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
                    <header>
                        <?php $this->load->view('templates/menu'); ?>
                    </header>

                    <section class="page-header-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="page-header">
                                        <h1><?php echo $title; ?></h1>
                                    </div>
                                    <ol class="breadcrumb">
                                        <li><a href="<?php echo site_url('agi')?>">Home</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="<?php echo site_url('/Agi/publications')?>">Our Publications</a></li>
                                        <li class="active"><?php echo $title; ?></li>
                                    </ol>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>


                    <div class="container">
                        <div class="content-wrapper">
                            <div class="inner-content">
                                <div class="row">
                                    <div class="col-xs-12 col-md-9 col-sm-8">
                                        <article class="blog-post-wrapper single-article">
                                            <?php $this->load->view('templates/ticker-news'); ?>

                                            <header class="entry-header">
                                                <h2 class="entry-title"><a href="#"><?php echo $title; ?></a></h2>
                                            </header><!-- /.entry-header -->

                                            <div class="entry-content"> 
                                                <p align="justify"><img src="<?PHP echo base_url() . 'assets/img/acme.jpg'; ?>" style="max-width: 34%;margin:0 20px;" align="left"><b>ACME: Endeavoring thoughts towards pinnacle (ISSN: 0974-1763)-</b>  A peer reviewed journal of Faculty of Commerce & Business Management, Haldwani invites original research papers, case studies, perspectives and book reviews on themes/issues of current concern in all areas of management including HR, Marketing, Finance, IB, IT, Retail, Hospitality, Travel & Tourism, Energy Management & Entrepreneurship.</p>
                                                <p align="justify">The journal welcomes innovative research based papers, perspectives, case studies and book reviews in functional areas of management. All submissions are reviewed in terms of their contribution to literature, research, empirical evidence and appropriate methodology. For any further query, please contact</p>
                                                <p><b>Managing Editor “ACME”:</b>   research.fcbm@amrapali.ac.in</p>

                                                <p><marquee style="color: #ff0000">Manuscripts Invited for next issue of ACME: Journal of Management and IT. No Publication or Processing Fee</marquee></p>
                                                <div class="panel-group" id="accordion1">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                                                    Ethics Policy 
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>
                                                                    The publication of an article in a peer-reviewed journal is an essential building block in the development of a coherent and respected network of knowledge. It is a direct reflection of the quality of work of the author and the institutions that support them. Peer-reviewed articles support and embody the scientific method. It is therefore important to agree upon standards of expected ethical behaviour.
                                                                </p>
                                                                <p>ACME considers following Ethics while publishing articles</p>
                                                                <ul class="check-square-o">
                                                                    <li>Authorship of the paper: Authorship should be limited to those who have made a significant contribution to the conception, design, execution, or interpretation of the reported study.</li>
                                                                    <li>Originality and plagiarism: The authors should ensure that they have written entirely original works, and if the authors have used the work and/or words of others, that this has been appropriately cited or quoted.</li>
                                                                    <li>Data access and retention: Authors may be asked to provide the raw data in connection with a paper for editorial review, and should be prepared to provide public access to such data.</li>
                                                                    <li>Multiple, redundant or concurrent publication: An author should not in general publish manuscripts describing essentially the same research in more than one journal or primary publication. ACME does not view the following uses of a work as prior publication: publication in the form of an abstract; publication as an academic thesis; publication as an electronic preprint. Information on prior publication is included within journal’s Guide for Authors</li>
                                                                    <li>Disclosure and conflicts of interest: All submissions must include disclosure of all relationships that could be viewed as presenting a potential conflict of interest.</li>
                                                                    <li>Fundamental errors in published works: When an author discovers a significant error or inaccuracy in his/her own published work, it is the author's obligation to promptly notify the journal editor or publisher and cooperate with the editor to retract or correct the paper</li>                                                                    
                                                                </ul>
                                                                <br><br>
                                                                <h3>Publication Ethics</h3>
                                                                <p>Journal undertakes steps indentifying research misconduct and prevents publication of such paper in journal. In case of notice of occurrence of research misconduct Journal would follow Committee of Publication Ethics' (COPE) Code of Conduct  of pursuing alleged cases. Publishing Ethics Resource Kit (PERK) can be found here: http://www.elsevier.com/editors/publishing-ethics/perk</p>
                                                                <br><br>
                                                                <h3>Ethical Expectations of Editors:</h3>
                                                                <ul class="check-square-o">
                                                                    <li>Editor must carry out his expected duties in a balanced, fair and objective way without any discrimination on the basis of gender, sexual orientation, religious, ethnic or geographical origin of authors. (https://www.cambridge.org/core/about/ethical-standards#)</li>
                                                                    <li>In case of complaints of an ethical or conflict nature it must be handled with appropriate policies and procedures of the society. There should be a proper investigation of all complaints irrespective of approval time of publication Also; one should preserve the related documents of such complaints.( https://www.cambridge.org/core/about/ethical-standards#)</li>
                                                                </ul>
                                                                <br><br>
                                                                <h3>Ethical Expectations of Reviewers:</h3>
                                                                <ul class="check-square-o">
                                                                    <li>Reviewer must contribute to improve the quality of paper by objectively and timely reviewing the manuscript.( https://www.cambridge.org/core/about/ethical-standards#)</li>
                                                                    <li>Reviewer is expected to maintain the confidentiality of paper supplied by editor or author and should retain or copy the manuscript.</li>
                                                                    <li>Expected to raise the alarm in case of substantial similarity detected in the content provided.</li>
                                                                    <li>In case of any potential conflict of interest of financial, institutional, collaborative or other relationship between the reviewer and author, reviewer must inform the editor and can withdraw the services for that manuscript if feels so.</li>
                                                                </ul>
                                                                
                                                                <br><br>
                                                                <h3>Ethical Expectations of Authors:</h3>
                                                                <ul class="check-square-o">
                                                                    <li>Author should preserve the correct record of data in relation to their submitted manuscript which should be accessible if requested. </li>
                                                                    <li>Author should confirm that submitted is not under consideration or published elsewhere. </li>
                                                                    <li>Any unethical behavior identified must be brought into the notice of editor and publisher anytime with sufficient information and evidences so that proper investigation can be initiated.  Editor is responsible for taking any decision in this regard but he/she may consult publisher if feels appropriate.</li>                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                                                    Review Policy
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwo1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>
                                                                    All, ACME manuscripts are peer-reviewed by at least two reviewers experts of the specified field. Papers are reviewed, double-blind, in full publishable form; no journal manuscripts are accepted based only upon submission of an abstract. Reviewers are required to provide the author with comments intended to improve the content, style, and other issues which should improve the quality of the article.
                                                                </p>
                                                                <p>Submission evaluation criteria:</p>
                                                                <ul class="check-square-o">
                                                                    <li>Value or usefulness to field or profession.</li>
                                                                    <li>Adequacy of design/accuracy of analysis.</li>
                                                                    <li>Presentation and interpretation of findings, discussion, and conclusions.</li>
                                                                    <li>Inclusion of appropriate implications for practice and/or policy.</li>
                                                                    <li>Important and timely.</li>
                                                                    <li>Consistency with existing literature.</li>
                                                                    <li>Overall clarity of ideas and expression.</li>
                                                                    <li>References to relevant existing work.</li>                                                                    
                                                                </ul>
                                                                <p><b>Peer Review Process:</b> The entire journal contents of ACME are peer reviewed. We ensure objective process in review by experts in the field of publication. Reviewers have no conflict of interest and confidentiality has been maintained. Objective review by expert reviewers in the field or area of research, who have no conflict of interest and are capable of maintaining confidentiality and pointing out incited published work.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                                                    ACME Review Process
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseThree1" class="panel-collapse collapse">
                                                            <div class="panel-body">                                                                
                                                                <p>The complete review process is expected to take two to three months but can take longer depending on the number of papers currently in review. Authors can expect to hear from the journal editor or communications director within three weeks of submission of your manuscript.</p>
                                                                <p>(Step 1) The completed manuscript in a soft copy (Word doc) format should be submitted to the Editor-in-Chief: ACME</p>
                                                                <p>(Step 2) The manuscript is then submitted to the committee chair to be assigned for review to two (2) reviewers considered to have the expertise in the subject area of the manuscript for a careful dispassionate review. The identity of the authors and their institutional affiliations will be concealed from the reviewers. They will review the paper for technical content, relevance, timeliness, and value to the readership.</p>
                                                                <p>(Step 3) The manuscript will be adjudged into one of four categories: 1) accepted for publication 2) accepted with minor modifications, 3) accepted with major modifications and 4) not accepted. The results of the review will be communicated to the editor for onward transmission to the authors.</p>
                                                                <p>(Step 4) If required, authors are to modify the manuscript in light of the reviewers' comments and suggestions and resubmit the manuscript within two weeks. Authors should also send bios and photos at this time.</p>
                                                                <p>(Step 4) If required, authors are to modify the manuscript in light of the reviewers' comments and suggestions and resubmit the manuscript within two weeks. Authors should also send bios and photos at this time.</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                                                                    Publishing schedule & Fee
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseFive1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>Journal gets published <b>annually October-November</b>. There is <b>no publication or processing fee</b> being charged by ACME.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                        

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1">
                                                                    Editorial Board
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseSix1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>
                                                                    <img src="<?PHP echo base_url() . 'assets/img/editorBoard.jpg'; ?>">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                                                    Instructions to the Authors
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseFour1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>The contributors are requested to adhere to the following guidelines</p>
                                                                <ul class="check-square-o">
                                                                    <li>The selection of papers for publication is based on their originality, knowledge content and application. The journal endeavours to maintain balance between purely research oriented papers and those derived mainly from the experiences of practitioners involved in different areas of management.</li>
                                                                    <li>Authors are encouraged to contribute the empirical and analytical research or case research. In case of case studies, contributors are required to provide the teaching notes of the case along with brief description of the real life situation faced and the decision or action taken by the manager or organization. The perspectives need to be based on emerging issues and ideas. The journal encourages the contributors to review the current management books.</li>
                                                                    <li>The manuscript should normally not exceed 20 double spaced, single sided typed pages, 12 font size in Times New Roman font, leaving 1.5 inches margin on all sides of A-4 size paper.</li>
                                                                    <li>All manuscripts and related correspondence should be mailed to resea. The contributions received will be acknowledged within 2-3 working days by e-mail. The manuscripts not considered for publication will not be sent back. The acceptance or rejection of the contributions will be informed to the contributors through email only.</li>
                                                                    <li>The journal follows a policy of blind peer review.</li>
                                                                    <li>The contributors are required to attach a separate title page which should include the title of the paper, name(s) of the author(s) and relevant biographical information. The second page should carry the title of the paper and 100 to 150 word- single paragraph abstract of the paper.</li>
                                                                    <li>All tables, charts, and graphs should be black, not in color. Authors must acknowledge all the sources they have drawn upon and the sources should be indicated at bottom.</li>
                                                                    <li>References should be complete in all respects and arranged in alphabetical order as per the standard pattern of research.</li>
                                                                    <li>The authors should provide a declaration along with the manuscripts, stating that the article is an original work of author(s) and the same has not been published earlier in any other publication.</li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseNine1">
                                                                    Copyright and access
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseNine1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>Journal ensures vigilant approach towards IPR & copyright issues & work in tandem with polishers to handle the breach of such issues. Latest issue of ACME is accessible to all via it Website.</p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTen1">
                                                                    Archiving
                                                                </a>
                                                                <a style="float: right; font-size: 12px; font-weight: bold;color: #CC0000 !important;" href="<?php echo site_url('agi/archive');?>">[Archive]</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTen1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>In order to make freely available the research articles the published material in Journal will be securely archived (in electronic backup) have forth while journal content published till be preserved (in hard copy) to make available <br><a href="<?php echo site_url('agi/archive');?>" style="color: #0000AA; text-decoration: underline overline !important">Click here...</a></p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseEleven1">
                                                                    Authorship of paper                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseEleven1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>As a policy author/authors who have made a significant contribution to the conception, design, execution or interpretation of the reported study are encouraged to submit the papers for publication.  The must ensure that they have written entirely original works, and if authors have used the work and words of others, that this has been appropriately cited or quoted. It is the sole responsibility of authors to ensure originality.</p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwelve1">
                                                                    Ownership and management                                                               </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseTwelve1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>Dr. Ritvik Dubey, Director & Professor- Faculty of Commerce & Business Management, AGI</p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven1">
                                                                    Subscription Charges
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseSeven1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>
                                                                    <b>Rs. 500/ - Annually</b>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseEight1">
                                                                    Download latest Issue of ACME
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseEight1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <p>
                                                                    Click on Image to  download latest Issue of ACME
                                                                    <a href="<?PHP echo base_url() . 'assets/dwnlds/acme/vol13.pdf'; ?>" target="_blank"><img src="<?PHP echo base_url() . 'assets/img/acme.jpg'; ?>" style="max-width:100px;"></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div><!-- /.entry-content -->
                                        </article>                                            
                                    </div><!-- /.col-md-9 -->

                                    <div class="col-xs-12 col-md-3 col-sm-4" align="center">
                                        <?php $this->load->view('templates/quick-links'); ?>                                            
                                        <?php $this->load->view('templates/alumni-img-scroll'); ?>
                                    </div><!-- /.col-md-3 -->
                                </div><!-- /.row -->
                            </div><!-- /.inner-content -->
                        </div><!-- /.content-wrapper -->
                    </div><!-- /.container -->
    