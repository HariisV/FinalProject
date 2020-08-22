@extends('wrapper.master')
@section('navigasi', 'Forum')

@section('content')
 

    <div class="container">
        <div class="row">
            <div class=" gowpr col-md-7">
                <div class="panel">
                    <div class="panel-heading">
                    <h3 class="panel-title"> Posting Sesuatu  </h3>
                    </div>
                    <div class="panel-body pad-no">
                        <!-- Multiple Select Choosen -->
                        <!--===================================================-->
                    <form class="form-horizontal form-bordered" action="{{route('pertanyaan.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <input type="text" class="form-control mt-4 @error('judul') is-invalid @enderror" name="judul" placeholder="Judul">
                            @error('judul') <div class="invalid-feedback">{{$message}}</div> @enderror
                            <input type="text" class="form-control mt-3 mb-3 @error('tag') is-invalid @enderror" name="tag"  placeholder="Tag">
                            @error('tag') <div class="invalid-feedback">{{$message}}</div> @enderror
                            <textarea id="konten" class="form-control @error('isi') is-invalid @enderror" name="isi" rows="10" cols="50"></textarea>
                            @error('isi') <div class="invalid-feedback">{{$message}}</div> @enderror
                            <div class="pad-all text-right"> 
                                <button class="btn btn-info"><i class="fa fa-send"></i> Send </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @forelse ($pertanyaan as $tanya)
                <div class="ml-5 mt-4 col-md-5">
                    <div class="panel">
                        <div class="panel-heading">
                        <h3 class="panel-title" id="isi"><strong>{{$tanya->user->name}} </strong>- {{$tanya->created_at}}</h3>
                        </div>
                        <h1 class="text-center">{{$tanya->judul}}  </h1>
                        <div class="panel-body pad-no mt-3 ml-3 mb-4">
                             {!! $tanya->isi !!}
                             <a href="" class="badge badge-sm badge-primary ">
                                <i class="fa fa-thumbs-up"> 10 </i>
                            </a>
                            <a href="" class="badge badge-sm badge-danger">
                                <i class="fa fa-thumbs-down"> 5 </i>
                            </a>
                        </div>
                        
                       
                        <ul class="list-group mt-3">
                            <li class="list-group-item">
                               <h4 class="text-center"><strong>Jawaban</strong></h4>
                            </li>
                            @forelse ($jawaban as $jwbn)
                                @if ($tanya->id == $jwbn->pertanyaan_id)    
                                <li class="list-group-item">
                                    <strong>{{$jwbn->user->name}} :</strong> {{$jwbn->isi}}<br>

                                    <a href="" class="badge badge-primary ">
                                        <i class="fa fa-thumbs-up"> 10 </i>
                                    </a>
                                    <a href="" class="badge badge-danger">
                                        <i class="fa fa-thumbs-down"> 5 </i>
                                    </a> 
                                </li>
                                
                                @endif
                            @empty
                                
                          
                                
                            @endforelse
                            
                            
                        </ul>
                    <form action="{{route('tambahjawaban', 4)}}" method="post" class="mt-3 ">
                        @csrf
                            <input type="text" class="form-control col-md-8 mr-2 ml-4" name="isi" placeholder="Jawab"> 
                            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                            <input type="hidden" name="pertanyaan_id" value="{{$tanya->id}}">
                            <button type="submit" class="btn btn-info"><i class="fa fa-paper-plane"></i></button>
                        </form>
                        <ul class="list-group mt-3">
                            <li class="list-group-item">
                               <h4 class="text-center"><strong>Komentar</strong></h4>
                            </li>
                            <li class="list-group-item">
                               
                                @foreach ($komentar as $kmn)
                                     @if ($kmn->pertanyaan_id == $tanya->id)
                                     <strong>{{$kmn->user->name}} :</strong> {{$kmn->isi}} <br>
                                     @endif
                                @endforeach
                               
                            </li>
                            
                        </ul>
                        <form action="" method="post" class="mt-3 pb-3">
                            <input type="text" class="form-control col-md-8 mr-2 ml-4" placeholder="komentar"> 
                            <button type="submit" class="btn btn-success"><i class="fa fa-share"></i></button>
                        </form>
                    </div>
                </div>
                @empty
                    <h2>Belum Ada Pertanyaan</h2>
                @endforelse
            </div>
    </div>


    <script>
        CKEDITOR.replace('isi');
    </script>


    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script>
      var konten = document.getElementById("konten");
        CKEDITOR.replace(konten,{
        language:'en-gb'
      });
      CKEDITOR.config.allowedContent = true;
    </script>
@endsection