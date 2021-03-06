<div class="row margin-bottom">
	<div class="col-xs-12">
		<form action="{{ route('admin.game.index') }}" method="GET">
			{!! csrf_field() !!}
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Từ khóa</label>
				<input name="name" type="text" value="{{ $request->name }}" class="form-control" placeholder="Name">
			</div>
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Loại game</label>
			  	{{ Form::select('type', array_add(CommonOption::typeGameArray(), '', '-- chọn'), $request->type, array('class' =>'form-control')) }}
			</div>
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Thể loại game</label>
			  	{{ Form::select('type_id', array_add(CommonQuery::getArrayWithStatus('game_types'), '', '-- chọn'), $request->type_id, array('class' =>'form-control')) }}
			</div>
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Seri game</label>
			  	{{ Form::select('seri', array(''=>'-- chọn',0=>'Chưa có seri'), $request->seri, array('class' =>'form-control')) }}
			</div>
			<!-- <div class="input-group" style="width: 150px; display:inline-block;">
				<label>Kiểu xoay màn hình</label>
			  	{{-- Form::select('screen', array_add(CommonOption::screenArray(), '', '-- chọn'), $request->screen, array('class' =>'form-control')) --}}
			</div> -->
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Trạng thái</label>
			  	{{ Form::select('status', array_add(CommonOption::statusArray(), '', '-- chọn'), $request->status, array('class' =>'form-control')) }}
			</div>
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Đăng từ ngày</label>
				<input name="start_date" type="text" value="{{ $request->start_date }}" class="form-control pull-right datepicker" placeholder="Từ ngày">
			</div>
			<div class="input-group" style="width: 150px; display:inline-block;">
				<label>Đăng đến ngày</label>
				<input name="end_date" type="text" value="{{ $request->end_date }}" class="form-control pull-right datepicker" placeholder="Đến ngày">
			</div>
			<div class="input-group" style="display: inline-block; vertical-align: bottom; margin-top: 15px;">
				<input type="submit" class="btn btn-primary" value="Search" />
			</div>
		</form>
	</div>
</div>