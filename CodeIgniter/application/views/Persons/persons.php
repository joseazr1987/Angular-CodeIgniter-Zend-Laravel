
<div class="row" ng-controller="personCtrl">
    <div id="grid"
        kendo-grid
        k-options="{{grid.options}}"
        k-data-source="grid.persons"
    ></div>

    <!-- <div k-on-change="onSelection(kendoEvent)" ></div>
    <div
        kendo-window="modal"
        k-options="window.opts"
        k-visible="false"
        k-modal="true"
    >
    <button ng-click="window.close()" class="btn">Close</button>
      </div> -->
</div>