<div>
    <div class="col-md-12 m-2">
        <form action="/savedesignation" method="post">
            {{ csrf_field() }}
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="exampleInputDate">Designation</label>
                    <input type="text" class="form-control"  placeholder="Enter designation"
                        wire:model="name" value="{{ old('name') }}">
                        @error('name')
                        <span class="alert text-danger ml-17">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="col-sm-4">
                
                <div class="form-group mt-4">
                    @if($designationid)
                    <button wire:click="updateform()" type="button" class="btn btn-primary">Update</button>
                    @else
                    <button wire:click="saveform()" type="button" class="btn btn-primary">Save</button>
                    @endif
                    
                    <a wire:click="cancel()" type="button">
                        <button type="button" class="btn btn-secondary">Cancel</button></a>
                </div>
            </div>

        </form>
    </div>
    <div class="col-md-12 m-2">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
    
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                   
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($designations as $des)
                    <tr>
                        <td>{{ $des->id }}</td>
                        <td>{{ $des->name }}</td>
                        <td>{{ $currentDateTime = \Carbon\Carbon::parse($des->created_at)->format('d/m/Y h:i A') }}
                        </td>
                        <td>{{ $currentDateTime = \Carbon\Carbon::parse($des->updated_at)->format('d/m/Y h:i A') }}
                        </td>
    
    
                        <td>
                            <a wire:click="editdesignation( {{$des->id }})">
                                <div class="d-flex">
                                    <button type="button" class="btn btn-block btn-primary"
                                        style="width: 100px; float:left;">Edit</button>
                            </a>
                            &nbsp;&nbsp;
    
                            <a wire:click="deletedesignation({{ $des->id }})">
                                <button type="button" class="btn btn-block btn-danger"
                                    style="width: 120px; float:right;">Delete</button></a>
    
                        </td>
                    </tr>
                @endforeach
    
            </tbody>
        </table>
    </div>
</div>


