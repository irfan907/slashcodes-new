<div class="row">
@foreach($projects as $project)  
                
                <div class="col-md-4">
                    <div class="work__box" onMouseOver="this.style.background='{{$project->hover_color}}'" onMouseOut="this.style.background='#f7f7f7'">                                                   
                        <div class="work__box_inner">
                            
                            @foreach($project->tags as $tag)  
                            @if($loop->index < 1)
                            <div class="work__box_type">
                                <p>{{$tag->label}}</p>
                                </div>            
                                @endif
                                @endforeach
                                              
                            <a href="{{ route('projects_detail',$project->slug) }}" class="mouse_view">
                            
                                <div class="work__box_content"> 
                                    <img src="{{ asset('storage/'.$project->logo) }}"  alt="{{$project->title}}">                                                                                                                                                           
                                </div> 
                                
                                <img src="{{ asset('storage/'.$project->banner) }}"  class="w-100 main_work_img" alt="{{$project->title}} by Cynosure Designs">
                            </a>
                        </div>                                      
                    </div>
                </div>
            @endforeach   
            </div>