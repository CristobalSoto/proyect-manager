<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <!--<div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div> -->
    <div class="sidebar-module">
        <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/projects/{{ $project->id }}/edit"><i class="fa fa-pencil-square-o"></i> Edit</a></li>
            <li><a href="/project/create"><i class="fa fa-plus-circle"></i> Create new project</a></li>
            <li><a href="/projects"><i class="fa fa-user-o"></i> My projects</a></li>
            <br/>
            @if($project->user_id == Auth::user()->id) 
            <li>
            <i class="fa fa-power-off" aria-hidden="true"></i>
            <a href="#"
                onclick="
                var result = confirm('Are you sure you wish to delete this project?');
                    if( result ){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                      }
                          "
                          >
                  Delete
              </a>

              <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

            </li>
            @endif
              <!-- <li><a href="#">Add new member</a></li> -->
        </ol>
        <hr/>
        <h4>Add members</h4>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12  col-sm-12 ">
                <form id="add-user" action="{{ route('projects.adduser') }}"  method="POST" >
                    {{ csrf_field() }}
                    <div class="input-group"> 
                        <input class="form-control" name = "project_id" id="project_id" value="{{$project->id}}" type="hidden">
                        <input type="text" required class="form-control" id="email"  name = "email" placeholder="Email">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" id="addMember" >Add!</button>
                  </span>
                </div><!-- /input-group -->
                </form>
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
<br/>
            <h4>Team Members</h4>
            <ol class="list-unstyled" id="member-list">
            @foreach($project->users as $user)
              <li><a href="#"> {{$user->email}} </a> </li>
              
              @endforeach
            </ol>

          </div>

          <!--<div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            </ol>
          </div> -->
        </div>