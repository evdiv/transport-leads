<form class="form-horizontal" method="POST" action="/orders/{{ $order->id }}/comments">

    {{ csrf_field() }}

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Add Comment</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <textarea name="body" class="textarea" placeholder="Add your comment here ..."></textarea>
          </div>
        </div>
      </div>
    </div>


    <div class="field is-horizontal">
      <div class="field-label">
        <!-- Left empty for spacing -->
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <button type="submit" class="button is-primary">
              Add comment
            </button>
          </div>
        </div>
      </div>
    </div>

</form>