<div id="oveview">
    <h2 class="heading-2">Overview</h2>
    <div class="over-text">
        <p class="text-overflow">{{ Auth::guard('freelancer')->user()->overview_text }}</p>
        <a class="read-more">more</a>
    </div>
</div>