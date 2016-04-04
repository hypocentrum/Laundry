<div class="form-group">
    <div class="col-md-3 control-label">
        {!! Form::label('nama_barang', 'Nama barang') !!}
    </div>
    <div class="col-md-5">
        @if ($editor_mode == 'show')
            {!! Form::text('nama_barang', null, array('class' => 'form-control', 'disabled')) !!}
        @else
            {!! Form::text('nama_barang', null, array('class' => 'form-control')) !!}
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-3 control-label">
        {!! Form::label('tanggal', 'Tanggal') !!}
    </div>
    <div class="col-md-5">
        @if ($editor_mode == 'show')
            {!! Form::text('tanggal', null, array('class' => 'form-control', 'disabled')) !!}
        @else
            {!! Form::text('tanggal', null, array('class' => 'form-control')) !!}
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-3 control-label">
        {!! Form::label('jumlah', 'Jumlah') !!}
    </div>
    <div class="col-md-5">
        @if ($editor_mode == 'show')
            {!! Form::text('jumlah', null, array('class' => 'form-control', 'disabled')) !!}
        @else
            {!! Form::text('jumlah', null, array('class' => 'form-control')) !!}
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-3 control-label">
        {!! Form::label('harga', 'Harga') !!}
    </div>
    <div class="col-md-5">
        @if ($editor_mode == 'show')
            {!! Form::text('harga', null, array('class' => 'form-control', 'disabled')) !!}
        @else
            {!! Form::text('harga', null, array('class' => 'form-control')) !!}
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-3 control-label">
        {!! Form::label('total', 'Total') !!}
    </div>
    <div class="col-md-5">
        @if ($editor_mode == 'show')
            {!! Form::text('total', null, array('class' => 'form-control', 'disabled')) !!}
        @else
            {!! Form::text('total', null, array('class' => 'form-control')) !!}
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-3 control-label">
        {!! Form::label('kondisi', 'Kondisi') !!}
    </div>
    <div class="col-md-5">
        @if ($editor_mode == 'show')
            {!! Form::select('kondisi', array('Baik' => 'Baik', 'Masih bisa digunakan' => 'Masih bisa digunakan', 'Rusak' => 'Rusak', 'Hilang' => 'Hilang'), 'Baik', array('class' => 'form-control', 'disabled')) !!}
        @else
            {!! Form::select('kondisi', array('Baik' => 'Baik', 'Masih bisa digunakan' => 'Masih bisa digunakan', 'Rusak' => 'Rusak', 'Hilang' => 'Hilang'), 'Baik', array('class' => 'form-control')) !!}
        @endif
    </div>
</div>
<div class="form-group">
    <div class="col-md-3 control-label">
        {!! Form::label('keterangan', 'Keterangan') !!}        
    </div>
    <div class="col-md-5">
        @if ($editor_mode == 'show')
            {!! Form::textarea('keterangan', null, array('class' => 'form-control', 'disabled')) !!}
        @else
            {!! Form::textarea('keterangan', null, array('class' => 'form-control')) !!}
        @endif
    </div>
</div>
<div class="form-group">

    <div class="col-md-offset-3">
        @if ($editor_mode == 'show')            
            
        @else
            <div>
                {!! Form::submit($submit_text, array('class' => 'btn btn-success')) !!}
            </div>
        @endif
        <div>
            <a href="{{ route('barangs.index') }}" class="btn btn-default">Back</a>
        </div>
    </div>
</div>