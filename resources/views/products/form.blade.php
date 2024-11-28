<x-template title="Form">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>

    <div class="input-group">
        <span class="input-group-text">Description</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">Price $</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
    </div>

    <div >
        <a href='store'><button class="btn btn-primary" type="submit" href='products.store'>Submit</button>
        </a>
    </div>

</x-template>
