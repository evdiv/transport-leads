<form class="form-horizontal" method="POST" action="/orders/{{ $order->id }}/proposals">

  {{ csrf_field() }}

  <input type='hidden' name='order_id' value='{{ $order->id }}'/>

  <div class="field is-horizontal">
      <div class="field-label">
          <label class="label">Add your proposal</label>
      </div>

      <div class="field-body">
          <div class="field is-expanded">
              <div class="field has-addons">
                  <p class="control"><a class="button is-static">$</a></p>

                  <p class="control is-expanded">
                      <input class="input" type="number" name="amount" placeholder="Amount (in dollars)">
                  </p>

              </div>
          </div>
      </div>
  </div>


  <div class="field is-horizontal">
    <div class="field-label is-normal">
    </div>
    <div class="field-body">
      <div class="field">
        <div class="control">
          <textarea class="textarea" name="body" placeholder="Explain how we can help you"></textarea>
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
        <div class="is-pulled-right control">
          <button class="button is-primary">
            Submit Proposal
          </button>
        </div>
      </div>
    </div>
  </div>
</form>