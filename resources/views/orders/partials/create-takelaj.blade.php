        <div class="panel panel-default">
            <div class="panel-heading">Такелажные работы</div>
            <div class="panel-body">
                
                <!-- Vue JS component for adding multiple goods -->
                <form-add-takelaj></form-add-takelaj>
                
                <form method="POST" action="/orders/{{ $order->id }}/comments">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="body">Description</label>
                    <textarea class="form-control" name="body" rows="6" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
            </div>
        </div>