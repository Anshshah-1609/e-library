@extends("layout.user")

@section("contain")
    <div class="files-new">
				<ul>
				@foreach($book->sortByDesc('id') as $b)
		
					<li>
						<div class="row" id="row1">
							<div class="col-md-2">
								<div class="file-left">
									<a href="#" >
										<img class="img-zoom file-img" src="{{'http://127.0.0.1:8000/bookimages/' . $b->bcover}}" alt="{{$b->bname}}" title="{{$b->bname}}" id="img1" style="z-index: 10; border-radius: 3px 0px 0px 3px; width: 71px; height: 98px; margin-left: 0px; margin-top: 0px;">
									</a>
									
								</div>
							</div>
						
							<div class="col-md-7">
								<div class="float-right">
										<h2>{{$b->bname}}</h2>
								<div>
								<span class="fi-pagecount ">{{$b->bpage}}  Pages</span><span class="ml-1 mr-1">--</span><span class="fi-size hidemobile">{{$b->bsize}}</span><span class="ml-1 mr-1 hidemobile"></span>--<span class="fi-year ">{{$b->bpubdate}}</span><span class="ml-1 mr-1">--</span><span class="fi-hit">00 Downloads</span></span> <br />
								<br></div>
								{{$b->bdescribe}}
								 &nbsp;...
								</div>
								<h5><a href="/home/{{$b->id}}/view" style="color:#1e3d59"><b>Details</b></a></h5>
							
							</div>
						</div>
					</li>
				
				@endforeach
				</ul>
					<hr/>
				<span>
					{{$book->links()}}
				</span>
					<hr/>
				
			</div>
		  
@stop
	
