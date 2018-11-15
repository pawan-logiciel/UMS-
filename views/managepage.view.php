<!-- MANAGE User -->
        <div class="col-lg-2"></div>
		<div class="col-lg-10 pl-5 pb-5 table-secondary content">
			<h5 class="mt-5 mb-5">MANAGE DEPARTMENTS</h5>
			<div class="row">
				<div class="col-lg-11 bg-white shadow">
					 <table class="table table-responsive-sm" id="mytable" width="100%">
                        <thead>
                            <tr>
                                <th width="100px">Sr. No.<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Title<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Meta Keyword<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Status<i class="fa fa-sort float-right" aria-hidden="true"></i></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i=1;
                            $getuser=App::get('database')->select('pages');
                             $data=$getuser->fetchAll();
                             foreach ($data as $getdata) {
                                echo'<tr>';
                                echo '<td>',$i,'</td>';
                                echo '<td>',$getdata['title'],'</td>';
                                echo '<td>',$getdata['metakeyword'],'</td>';
                                echo '<td>',$getdata['status'],'</td>';
                                echo '<td>';
                                echo '<a class="btn btn-primary" href="/recivepage?id='.$getdata['id'].'">Update</a>';
                                echo '<a class="btn btn-danger ml-2" href="/deletepage?id='.$getdata['id'].'">Delete</a>';
                                echo '</td>';
                                echo'</tr>';
                                $i++;
                             }
                            ?>
                        </tbody>
                    </table> 
				</div>
			</div>
		</div>