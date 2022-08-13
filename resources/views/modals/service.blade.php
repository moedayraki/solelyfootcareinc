<div class="modal fade" id="modal-{{$service->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{$service->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$service->description}}
                <br />
                <br />
                <b>Treatment Length:</b> {{$service->length}}
                <br />
                <b>Treatment Cost:</b> {{$service->cost}}
            </div>
        </div>
    </div>
</div>