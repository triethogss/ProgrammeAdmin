<div class="span9">
	<h1>Create New Tournament</h1>
    <hr>
    <form method="post" enctype="multipart/form-data" id="TournamentFormCreate">
	<table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
    	<td>
    		Tournament Name
    	</td>
        <td>
			<input type="text" id="" name="tournament_name" class="span12" required="required">
        </td>
    </tr>
    <tr>
    	<td>
    		Tournament Image Poster
    	</td>
        <td>
			<input type="file" id="" name="tournament_poster" class="" required="required">
        </td>
    </tr>
    <tr>
    	<td>
    		Start Date
    	</td>
        <td>
			<div id="datetimepicker1" class="input-append date datetimepicker">
				<input name="tournament_start_date" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required">
				<span class="add-on">
					<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
				</span>
			</div>
        </td>
    </tr>
    <tr>
    	<td>
    		End Date
    	</td>
        <td>
			<div id="datetimepicker1" class="input-append date datetimepicker">
				<input name="tournament_end_date" data-format="dd-MM-yyyy hh:mm:ss" type="text" required="required">
				<span class="add-on">
					<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
				</span>
			</div>
        </td>
    </tr>
    <tr>
    	<td>
    		Tournament Cost to join
    	</td>
        <td>
			<input type="text" id="" name="tournament_cost" class="span12" required="required">
            <p class="help-block">Put 0 for free tournament</p>
        </td>
    </tr>
    <tr>
    	<td>
    		Terms and Conditions
    	</td>
        <td>
			<textarea id="" name="tournament_toc"></textarea>
        </td>
    </tr>
	</tbody>
	</table>
	<div class="tournament_prizes_container">
		<h3>Tournament Prize</h3>
        <table class="table table-striped">
            <tr>
                <td>Prize Name</td>
                <td>
                    <input type="text" name="prize_name[]" class="span12" required="required">
                </td>
            </tr>
            <tr>
                <td>Prize TnC</td>
                <td>
                    <textarea name="prize_toc[]" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>Redemption detail</td>
                <td>
                    <textarea name="prize_detail[]" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>Winner rank</td>
                <td>
                    <input type="text" name="prize_start_rank[]" class="span3" required="required">
                    &nbsp; to &nbsp;
                    <input type="text" name="prize_end_rank[]" class="span3" required="required">
                </td>
            </tr>
            <tr>
                <td>Prize Image</td>
                <td>
                    <input type="file" id="" name="prize_image[]" class="" required="required">
                </td>
            </tr>
        </table>
	</div>
	<button type="button" class="btn btn-inverse addTournamentBtn" ><i class="icon-plus icon-white"></i> Add tournament prize</button>
	<input type="submit" class="btn btn-success" value="Create Tournament">
	</form>
    <div class="tournament_prizes_container_tpl" style="display:none;">
        <h3>Tournament Prize <button class="btn btn-danger deleteTournamentBtn"><i class="icon-minus icon-white"></i> Delete Prize</button></h3>
        <table class="table table-striped">
            <tr>
                <td>Prize Name</td>
                <td>
                    <input type="text" name="prize_name[]" class="span12" required="required">
                </td>
            </tr>
            <tr>
                <td>Prize TnC</td>
                <td>
                    <textarea name="prize_toc[]" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>Redemption detail</td>
                <td>
                    <textarea name="prize_detail[]" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>Winner rank</td>
                <td>
                    <input type="text" name="prize_start_rank[]" class="span3" required="required">
                    &nbsp; to &nbsp;
                    <input type="text" name="prize_end_rank[]" class="span3" required="required">
                </td>
            </tr>
            <tr>
                <td>Prize Image</td>
                <td>
                    <input type="file" id="" name="prize_image[]" class="" required="required">
                </td>
            </tr>
        </table>
    </div>

</div>