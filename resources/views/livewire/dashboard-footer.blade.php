<div>
   <div class="dashboard-footer">
    <div class="flex-between flex-wrap gap-16">
         <p class="text-gray-300 text-13 fw-normal">&copy; 2020 - {{ date('Y') }} TopLearner. All Rights Reserved.</p>
        <div class="flex-align flex-wrap gap-16">
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">License</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Support</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">{{ now()->format('d/m/Y, l, h:i:s A') }}</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">v{{ app()->version() }}</a>
        </div>
    </div>
</div>
</div>
