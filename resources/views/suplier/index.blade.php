@extends('template.dashboard')

@section('barang-treeview')
    class="treeview"
@endsection

@section('suplier')
    class="active"
@endsection

@section('css')
<style>
    form{
        display: inline-block;
    }
</style>
@endsection

@section('js')
@endsection

@section('content')
<?php $no = 1; ?>
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">List Suplier</h3>

            <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th style="text-align:center">no</th>
                    <th style="text-align:center">Nama Suplier</th>
                    <th style="text-align:center">Alamat</th>
                    <th style="text-align:center">Jam buka</th>
                    <th style="text-align:center">Keterangan</th>
                    <th style="text-align:center">Action</th>
                </tr>
                @foreach ($posts as $post)
                <tr>
                    <td style="text-align:center"><?=$no?></td>
                    <td style="text-align:center"> {{ $post->nama_suplier }} </td>
                    <td style="text-align:center"> {{ $post->alamat }} </td>
                    <td style="text-align:center"> {{ $post->jam_buka }} - {{ $post->jam_tutup }} </td>
                    <td style="text-align:center"> {{ $post->keterangan }} </td>
                    <td style="text-align:right">
                        @if (Auth::user()->roles == 0)
                        <a href=" {{ route('suplier.edit', $post->id) }} " type="button" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                        <form action=" {{ route('suplier.destroy', $post)}} " method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
                        @endif
                    </td>
                </tr>
                <?php $no++; ?>
            @endforeach
            </table>
        </div>
        @if (Auth::user()->roles == 0)

        <div class="box-footer" style="text-align:right">
            <a href=" {{ route('suplier.create')}} " type="button" class="btn btn-primary">Tambah Suplier</a>
        </div>
        @endif
        <!-- /.box-body -->
    </div>


@endsection
