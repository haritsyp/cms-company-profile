@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form {{$page_attributes->title}}</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('partner.update',$partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('pages.admin.partner.form')
            @method('PUT')
        </form>
    </div>
</div>


@endsection

@section('script')
<script type="text/javascript">
    const fileInfo = document.querySelector('.file-info');
    const realInput = document.getElementById('real-input');

    function readURL(input) {
        if((validateFileExtension(input, "valid_msg", "pdf/office/image files are only allowed!", new Array("jpg","pdf","jpeg","gif","png","doc","docx","xls","xlsx","ppt","txt")) == false))
        {
            $('#real-input').val('');
            $('#preview')
            .attr('src', '{{ asset("img/dummy.jpg") }}');
            return false;
        }else if(validateSize(input) == 0){
            $('#real-input').val('');
            $('#preview')
            .attr('src', '{{ asset("img/dummy.jpg") }}');
            return false;
        }else{
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview')
                    .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    }

    function validateSize(file) {
        var FileSize = file.files[0].size / 1024 / 1024;
        if (FileSize > 1000000) {
            alert('File Lebih Dari 1 MB');
            return 0;
        }else{
            return 1;
        }
    }

    function validateFileExtension(component,msg_id,msg,extns)
    {
        var flag=0;
        with(component)
        {
            var ext=value.substring(value.lastIndexOf('.')+1);
            for(i=0;i<extns.length;i++)
            {
                if(ext==extns[i])
                {
                    flag=0;
                    break;
                }
                else
                {
                    flag=1;
                }
            }
            if(flag!=0)
            {   
                alert('ekstensi file tidak didukung!')
                return false;
            }
            else
            {
                return true;
            }
        }
    }
</script>
@endsection
