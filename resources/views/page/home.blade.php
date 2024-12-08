@extends('vuexy.master')
@section('noi_dung')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body">
                                <h5>Congratulations 🎉 John!</h5>
                                <p class="card-text font-small-3">You have won gold medal</p>
                                <h3 class="mb-75 mt-2 pt-50">
                                    <a href="#">$48.9k</a>
                                </h3>
                                <button type="button" class="btn btn-primary waves-effect waves-float waves-light">View Sales</button>
                                <img src="/vuexy_assets/app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic">
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-8 col-md-6 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title">Statistics</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                                </div>
                            </div>
                            <div class="card-body statistics-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-primary me-2">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">230k</h4>
                                                <p class="card-text font-small-3 mb-0">Sales</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-info me-2">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">8.549k</h4>
                                                <p class="card-text font-small-3 mb-0">Customers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-danger me-2">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">1.423k</h4>
                                                <p class="card-text font-small-3 mb-0">Products</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="d-flex flex-row">
                                            <div class="avatar bg-light-success me-2">
                                                <div class="avatar-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign avatar-icon"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="fw-bolder mb-0">$9745</h4>
                                                <p class="card-text font-small-3 mb-0">Revenue</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>

                <div class="row match-height">
                    <div class="col-lg-4 col-12">
                        <div class="row match-height">
                            <!-- Bar Chart - Orders -->
                            <div class="col-lg-6 col-md-3 col-6">
                                <div class="card">
                                    <div class="card-body pb-50" style="position: relative;">
                                        <h6>Orders</h6>
                                        <h2 class="fw-bolder mb-1">2,76k</h2>
                                        <div id="statistics-order-chart" style="min-height: 85px;"><div id="apexchartsgdqnwfhq" class="apexcharts-canvas apexchartsgdqnwfhq apexcharts-theme-light" style="width: 135px; height: 70px;"><svg id="SvgjsSvg2187" width="135" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2189" class="apexcharts-inner apexcharts-graphical" transform="translate(13.5, 15)"><defs id="SvgjsDefs2188"><linearGradient id="SvgjsLinearGradient2192" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2193" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2194" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2195" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskgdqnwfhq"><rect id="SvgjsRect2197" width="139" height="55" x="-11.5" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskgdqnwfhq"><rect id="SvgjsRect2198" width="120" height="59" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2196" width="5.8" height="55" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2192)" class="apexcharts-xcrosshairs" y2="55" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2212" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2213" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2215" class="apexcharts-grid"><g id="SvgjsG2216" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2218" x1="-9.5" y1="0" x2="125.5" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2219" x1="-9.5" y1="11" x2="125.5" y2="11" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2220" x1="-9.5" y1="22" x2="125.5" y2="22" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2221" x1="-9.5" y1="33" x2="125.5" y2="33" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2222" x1="-9.5" y1="44" x2="125.5" y2="44" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2223" x1="-9.5" y1="55" x2="125.5" y2="55" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2217" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2225" x1="0" y1="55" x2="116" y2="55" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2224" x1="0" y1="1" x2="0" y2="55" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2199" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2200" class="apexcharts-series" seriesName="2020" rel="1" data:realIndex="0"><rect id="SvgjsRect2202" width="5.8" height="55" x="-2.9" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath2203" d="M -2.9 53.55L -2.9 30.25L 2.9 30.25L 2.9 30.25L 2.9 53.55Q 0 56.449999999999996 -2.9 53.55z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgdqnwfhq)" pathTo="M -2.9 53.55L -2.9 30.25L 2.9 30.25L 2.9 30.25L 2.9 53.55Q 0 56.449999999999996 -2.9 53.55z" pathFrom="M -2.9 53.55L -2.9 55L 2.9 55L 2.9 55L 2.9 55L -2.9 55" cy="30.25" cx="2.9000000000000012" j="0" val="45" barHeight="24.75" barWidth="5.8"></path><rect id="SvgjsRect2204" width="5.8" height="55" x="26.1" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath2205" d="M 26.1 53.55L 26.1 8.25L 31.900000000000002 8.25L 31.900000000000002 8.25L 31.900000000000002 53.55Q 29 56.449999999999996 26.1 53.55z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgdqnwfhq)" pathTo="M 26.1 53.55L 26.1 8.25L 31.900000000000002 8.25L 31.900000000000002 8.25L 31.900000000000002 53.55Q 29 56.449999999999996 26.1 53.55z" pathFrom="M 26.1 53.55L 26.1 55L 31.900000000000002 55L 31.900000000000002 55L 31.900000000000002 55L 26.1 55" cy="8.25" cx="31.900000000000002" j="1" val="85" barHeight="46.75" barWidth="5.8"></path><rect id="SvgjsRect2206" width="5.8" height="55" x="55.1" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath2207" d="M 55.1 53.55L 55.1 19.25L 60.9 19.25L 60.9 19.25L 60.9 53.55Q 58 56.449999999999996 55.1 53.55z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgdqnwfhq)" pathTo="M 55.1 53.55L 55.1 19.25L 60.9 19.25L 60.9 19.25L 60.9 53.55Q 58 56.449999999999996 55.1 53.55z" pathFrom="M 55.1 53.55L 55.1 55L 60.9 55L 60.9 55L 60.9 55L 55.1 55" cy="19.25" cx="60.89999999999999" j="2" val="65" barHeight="35.75" barWidth="5.8"></path><rect id="SvgjsRect2208" width="5.8" height="55" x="84.1" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath2209" d="M 84.1 53.55L 84.1 30.25L 89.89999999999999 30.25L 89.89999999999999 30.25L 89.89999999999999 53.55Q 87 56.449999999999996 84.1 53.55z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgdqnwfhq)" pathTo="M 84.1 53.55L 84.1 30.25L 89.89999999999999 30.25L 89.89999999999999 30.25L 89.89999999999999 53.55Q 87 56.449999999999996 84.1 53.55z" pathFrom="M 84.1 53.55L 84.1 55L 89.89999999999999 55L 89.89999999999999 55L 89.89999999999999 55L 84.1 55" cy="30.25" cx="89.89999999999999" j="3" val="45" barHeight="24.75" barWidth="5.8"></path><rect id="SvgjsRect2210" width="5.8" height="55" x="113.1" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath2211" d="M 113.1 53.55L 113.1 19.25L 118.89999999999999 19.25L 118.89999999999999 19.25L 118.89999999999999 53.55Q 116 56.449999999999996 113.1 53.55z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskgdqnwfhq)" pathTo="M 113.1 53.55L 113.1 19.25L 118.89999999999999 19.25L 118.89999999999999 19.25L 118.89999999999999 53.55Q 116 56.449999999999996 113.1 53.55z" pathFrom="M 113.1 53.55L 113.1 55L 118.89999999999999 55L 118.89999999999999 55L 118.89999999999999 55L 113.1 55" cy="19.25" cx="118.89999999999999" j="4" val="65" barHeight="35.75" barWidth="5.8"></path></g><g id="SvgjsG2201" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2226" x1="-9.5" y1="0" x2="125.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2227" x1="-9.5" y1="0" x2="125.5" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2228" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2229" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2230" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2231" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2232" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG2214" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2190" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 35px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 178px; height: 181px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                            <!--/ Bar Chart - Orders -->

                            <!-- Line Chart - Profit -->
                            <div class="col-lg-6 col-md-3 col-6">
                                <div class="card card-tiny-line-stats">
                                    <div class="card-body pb-50" style="position: relative;">
                                        <h6>Profit</h6>
                                        <h2 class="fw-bolder mb-1">6,24k</h2>
                                        <div id="statistics-profit-chart" style="min-height: 85px;"><div id="apexcharts8593jp9k" class="apexcharts-canvas apexcharts8593jp9k apexcharts-theme-light" style="width: 135px; height: 70px;"><svg id="SvgjsSvg2233" width="135" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2235" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)"><defs id="SvgjsDefs2234"><clipPath id="gridRectMask8593jp9k"><rect id="SvgjsRect2240" width="120" height="68" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask8593jp9k"><rect id="SvgjsRect2241" width="125" height="77" x="-6" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2239" x1="0" y1="0" x2="0" y2="65" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="65" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2258" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2259" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2261" font-family="Helvetica, Arial, sans-serif" x="0" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2262">1</tspan><title>1</title></text><text id="SvgjsText2264" font-family="Helvetica, Arial, sans-serif" x="22.600000000000005" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2265">2</tspan><title>2</title></text><text id="SvgjsText2267" font-family="Helvetica, Arial, sans-serif" x="45.2" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2268">3</tspan><title>3</title></text><text id="SvgjsText2270" font-family="Helvetica, Arial, sans-serif" x="67.80000000000001" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2271">4</tspan><title>4</title></text><text id="SvgjsText2273" font-family="Helvetica, Arial, sans-serif" x="90.40000000000002" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2274">5</tspan><title>5</title></text><text id="SvgjsText2276" font-family="Helvetica, Arial, sans-serif" x="113.00000000000001" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2277">6</tspan><title>6</title></text></g></g><g id="SvgjsG2279" class="apexcharts-grid"><g id="SvgjsG2280" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG2281" class="apexcharts-gridlines-vertical"><line id="SvgjsLine2282" x1="0" y1="0" x2="0" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine2283" x1="22.6" y1="0" x2="22.6" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine2284" x1="45.2" y1="0" x2="45.2" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine2285" x1="67.80000000000001" y1="0" x2="67.80000000000001" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine2286" x1="90.4" y1="0" x2="90.4" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine2287" x1="113" y1="0" x2="113" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line></g><line id="SvgjsLine2289" x1="0" y1="65" x2="113" y2="65" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2288" x1="0" y1="1" x2="0" y2="65" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2242" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2243" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2257" d="M 0 65L 22.6 39L 45.2 58.5L 67.8 26L 90.4 45.5L 113 6.5" fill="none" fill-opacity="1" stroke="rgba(0,207,232,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask8593jp9k)" pathTo="M 0 65L 22.6 39L 45.2 58.5L 67.8 26L 90.4 45.5L 113 6.5" pathFrom="M -1 65L -1 65L 22.6 65L 45.2 65L 67.8 65L 90.4 65L 113 65"></path><g id="SvgjsG2244" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG2246" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8593jp9k)"><circle id="SvgjsCircle2247" r="2" cx="0" cy="65" class="apexcharts-marker no-pointer-events wcupfwfzj" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="0" j="0" index="0" default-marker-size="2"></circle><circle id="SvgjsCircle2248" r="2" cx="22.6" cy="39" class="apexcharts-marker no-pointer-events wbtx2tgvm" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="1" j="1" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2249" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8593jp9k)"><circle id="SvgjsCircle2250" r="2" cx="45.2" cy="58.5" class="apexcharts-marker no-pointer-events wz41dnzn8" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="2" j="2" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2251" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8593jp9k)"><circle id="SvgjsCircle2252" r="2" cx="67.8" cy="26" class="apexcharts-marker no-pointer-events wtyl43o18" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="3" j="3" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2253" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8593jp9k)"><circle id="SvgjsCircle2254" r="2" cx="90.4" cy="45.5" class="apexcharts-marker no-pointer-events wwu6h6f15" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="4" j="4" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2255" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask8593jp9k)"><circle id="SvgjsCircle2256" r="5" cx="113" cy="6.5" class="apexcharts-marker no-pointer-events wsccl47i9" stroke="#00cfe8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="5" j="5" index="0" default-marker-size="5"></circle></g></g></g><g id="SvgjsG2245" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2290" x1="0" y1="0" x2="113" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2291" x1="0" y1="0" x2="113" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2292" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2293" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2294" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2238" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2278" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2236" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 35px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 207, 232);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 178px; height: 181px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                            <!--/ Line Chart - Profit -->

                            <!-- Earnings Card -->
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="card earnings-card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <h4 class="card-title mb-1">Earnings</h4>
                                                <div class="font-small-2">This Month</div>
                                                <h5 class="mb-1">$4055.56</h5>
                                                <p class="card-text text-muted font-small-2">
                                                    <span class="fw-bolder">68.2%</span><span> more earnings than last month.</span>
                                                </p>
                                            </div>
                                            <div class="col-6" style="position: relative;">
                                                <div id="earnings-chart" style="min-height: 126.8px;"><div id="apexcharts8ql8bv9c" class="apexcharts-canvas apexcharts8ql8bv9c apexcharts-theme-light" style="width: 156px; height: 126.8px;"><svg id="SvgjsSvg2295" width="156" height="126.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2297" class="apexcharts-inner apexcharts-graphical" transform="translate(-2, 0)"><defs id="SvgjsDefs2296"><clipPath id="gridRectMask8ql8bv9c"><rect id="SvgjsRect2299" width="164" height="128" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask8ql8bv9c"><rect id="SvgjsRect2300" width="164" height="132" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2301" class="apexcharts-pie"><g id="SvgjsG2302" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle2303" r="37.98536585365854" cx="80" cy="64" fill="transparent"></circle><g id="SvgjsG2304" class="apexcharts-slices"><g id="SvgjsG2305" class="apexcharts-series apexcharts-pie-series" seriesName="App" rel="1" data:realIndex="0"><path id="SvgjsPath2306" d="M 69.85216991000085 6.448795702018273 A 58.43902439024391 58.43902439024391 0 1 1 79.1840638026197 122.43332798844617 L 79.46964147170281 101.98166319249002 A 37.98536585365854 37.98536585365854 0 1 0 73.40391044150056 26.591717206311877 L 69.85216991000085 6.448795702018273 z" fill="#28c76f66" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="190.8" data:startAngle="-10" data:strokeWidth="0" data:value="53" data:pathOrig="M 69.85216991000085 6.448795702018273 A 58.43902439024391 58.43902439024391 0 1 1 79.1840638026197 122.43332798844617 L 79.46964147170281 101.98166319249002 A 37.98536585365854 37.98536585365854 0 1 0 73.40391044150056 26.591717206311877 L 69.85216991000085 6.448795702018273 z"></path></g><g id="SvgjsG2307" class="apexcharts-series apexcharts-pie-series" seriesName="Service" rel="2" data:realIndex="1"><path id="SvgjsPath2308" d="M 79.1840638026197 122.43332798844617 A 58.43902439024391 58.43902439024391 0 0 1 30.22590892178677 94.6212251391295 L 47.646840799161396 83.90379634043418 A 37.98536585365854 37.98536585365854 0 0 0 79.46964147170281 101.98166319249002 L 79.1840638026197 122.43332798844617 z" fill="#28c76f33" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="57.599999999999994" data:startAngle="180.8" data:strokeWidth="0" data:value="16" data:pathOrig="M 79.1840638026197 122.43332798844617 A 58.43902439024391 58.43902439024391 0 0 1 30.22590892178677 94.6212251391295 L 47.646840799161396 83.90379634043418 A 37.98536585365854 37.98536585365854 0 0 0 79.46964147170281 101.98166319249002 L 79.1840638026197 122.43332798844617 z"></path></g><g id="SvgjsG2309" class="apexcharts-series apexcharts-pie-series" seriesName="Product" rel="3" data:realIndex="2"><path id="SvgjsPath2310" d="M 30.22590892178677 94.6212251391295 A 58.43902439024391 58.43902439024391 0 0 1 69.84212548457727 6.4505677090342814 L 73.39738156497522 26.592869010872285 A 37.98536585365854 37.98536585365854 0 0 0 47.646840799161396 83.90379634043418 L 30.22590892178677 94.6212251391295 z" fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="111.6" data:startAngle="238.4" data:strokeWidth="0" data:value="31" data:pathOrig="M 30.22590892178677 94.6212251391295 A 58.43902439024391 58.43902439024391 0 0 1 69.84212548457727 6.4505677090342814 L 73.39738156497522 26.592869010872285 A 37.98536585365854 37.98536585365854 0 0 0 47.646840799161396 83.90379634043418 L 30.22590892178677 94.6212251391295 z"></path></g></g></g><g id="SvgjsG2311" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2312" font-family="Helvetica, Arial, sans-serif" x="80" y="79" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">App</text><text id="SvgjsText2313" font-family="Helvetica, Arial, sans-serif" x="80" y="65" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">53%</text></g></g><line id="SvgjsLine2314" x1="0" y1="0" x2="160" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2315" x1="0" y1="0" x2="160" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2298" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 199, 111, 0.4);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 199, 111, 0.2);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(40, 199, 111);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 185px; height: 128px;"></div></div><div class="contract-trigger"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Earnings Card -->
                        </div>
                    </div>

                    <!-- Revenue Report Card -->
                    <div class="col-lg-8 col-12">
                        <div class="card card-revenue-budget">
                            <div class="row mx-0">
                                <div class="col-md-8 col-12 revenue-report-wrapper" style="position: relative;">
                                    <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center me-2">
                                                <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                                <span>Earning</span>
                                            </div>
                                            <div class="d-flex align-items-center ms-75">
                                                <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                                <span>Expense</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="revenue-report-chart" style="min-height: 245px;"><div id="apexchartsj1smuujr" class="apexcharts-canvas apexchartsj1smuujr apexcharts-theme-light" style="width: 486px; height: 230px;"><svg id="SvgjsSvg2316" width="486" height="230" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2318" class="apexcharts-inner apexcharts-graphical" transform="translate(54.77499961853027, 10)"><defs id="SvgjsDefs2317"><linearGradient id="SvgjsLinearGradient2322" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2323" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2324" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2325" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskj1smuujr"><rect id="SvgjsRect2327" width="425.2250003814697" height="190.40640030860902" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskj1smuujr"><rect id="SvgjsRect2328" width="425.2250003814697" height="194.40640030860902" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect2326" width="7.956472229427761" height="190.40640030860902" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient2322)" class="apexcharts-xcrosshairs" y2="190.40640030860902" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2352" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2353" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2355" font-family="Helvetica, Arial, sans-serif" x="23.40138891008165" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2356">Jan</tspan><title>Jan</title></text><text id="SvgjsText2358" font-family="Helvetica, Arial, sans-serif" x="70.20416673024495" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2359">Feb</tspan><title>Feb</title></text><text id="SvgjsText2361" font-family="Helvetica, Arial, sans-serif" x="117.00694455040825" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2362">Mar</tspan><title>Mar</title></text><text id="SvgjsText2364" font-family="Helvetica, Arial, sans-serif" x="163.80972237057154" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2365">Apr</tspan><title>Apr</title></text><text id="SvgjsText2367" font-family="Helvetica, Arial, sans-serif" x="210.61250019073486" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2368">May</tspan><title>May</title></text><text id="SvgjsText2370" font-family="Helvetica, Arial, sans-serif" x="257.41527801089813" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2371">Jun</tspan><title>Jun</title></text><text id="SvgjsText2373" font-family="Helvetica, Arial, sans-serif" x="304.2180558310614" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2374">Jul</tspan><title>Jul</title></text><text id="SvgjsText2376" font-family="Helvetica, Arial, sans-serif" x="351.02083365122473" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2377">Aug</tspan><title>Aug</title></text><text id="SvgjsText2379" font-family="Helvetica, Arial, sans-serif" x="397.82361147138806" y="219.40640030860902" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2380">Sep</tspan><title>Sep</title></text></g></g><g id="SvgjsG2395" class="apexcharts-grid"><g id="SvgjsG2396" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG2397" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2399" x1="0" y1="190.40640030860902" x2="421.2250003814697" y2="190.40640030860902" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2398" x1="0" y1="1" x2="0" y2="190.40640030860902" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2329" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2330" class="apexcharts-series" seriesName="Earning" rel="1" data:realIndex="0"><path id="SvgjsPath2332" d="M 19.42315279536777 114.24384018516541L 19.42315279536777 80.05574218388664Q 23.40138891008165 76.07750606917276 27.37962502479553 80.05574218388664L 27.37962502479553 80.05574218388664L 27.37962502479553 114.24384018516541L 27.37962502479553 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 19.42315279536777 114.24384018516541L 19.42315279536777 80.05574218388664Q 23.40138891008165 76.07750606917276 27.37962502479553 80.05574218388664L 27.37962502479553 80.05574218388664L 27.37962502479553 114.24384018516541L 27.37962502479553 114.24384018516541z" pathFrom="M 19.42315279536777 114.24384018516541L 19.42315279536777 114.24384018516541L 27.37962502479553 114.24384018516541L 27.37962502479553 114.24384018516541L 27.37962502479553 114.24384018516541L 19.42315279536777 114.24384018516541" cy="78.06662412652969" cx="66.22593061553107" j="0" val="95" barHeight="36.177216058635715" barWidth="7.956472229427761"></path><path id="SvgjsPath2333" d="M 66.22593061553107 114.24384018516541L 66.22593061553107 48.82909253327475Q 70.20416673024495 44.85085641856087 74.18240284495883 48.82909253327475L 74.18240284495883 48.82909253327475L 74.18240284495883 114.24384018516541L 74.18240284495883 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 66.22593061553107 114.24384018516541L 66.22593061553107 48.82909253327475Q 70.20416673024495 44.85085641856087 74.18240284495883 48.82909253327475L 74.18240284495883 48.82909253327475L 74.18240284495883 114.24384018516541L 74.18240284495883 114.24384018516541z" pathFrom="M 66.22593061553107 114.24384018516541L 66.22593061553107 114.24384018516541L 74.18240284495883 114.24384018516541L 74.18240284495883 114.24384018516541L 74.18240284495883 114.24384018516541L 66.22593061553107 114.24384018516541" cy="46.83997447591781" cx="113.02870843569437" j="1" val="177" barHeight="67.4038657092476" barWidth="7.956472229427761"></path><path id="SvgjsPath2334" d="M 113.02870843569437 114.24384018516541L 113.02870843569437 8.082122867232421Q 117.00694455040825 4.103886752518541 120.98518066512213 8.082122867232421L 120.98518066512213 8.082122867232421L 120.98518066512213 114.24384018516541L 120.98518066512213 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 113.02870843569437 114.24384018516541L 113.02870843569437 8.082122867232421Q 117.00694455040825 4.103886752518541 120.98518066512213 8.082122867232421L 120.98518066512213 8.082122867232421L 120.98518066512213 114.24384018516541L 120.98518066512213 114.24384018516541z" pathFrom="M 113.02870843569437 114.24384018516541L 113.02870843569437 114.24384018516541L 120.98518066512213 114.24384018516541L 120.98518066512213 114.24384018516541L 120.98518066512213 114.24384018516541L 113.02870843569437 114.24384018516541" cy="6.093004809875481" cx="159.83148625585767" j="2" val="284" barHeight="108.15083537528993" barWidth="7.956472229427761"></path><path id="SvgjsPath2335" d="M 159.83148625585767 114.24384018516541L 159.83148625585767 18.744881284514527Q 163.80972237057156 14.766645169800647 167.78795848528543 18.744881284514527L 167.78795848528543 18.744881284514527L 167.78795848528543 114.24384018516541L 167.78795848528543 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 159.83148625585767 114.24384018516541L 159.83148625585767 18.744881284514527Q 163.80972237057156 14.766645169800647 167.78795848528543 18.744881284514527L 167.78795848528543 18.744881284514527L 167.78795848528543 114.24384018516541L 167.78795848528543 114.24384018516541z" pathFrom="M 159.83148625585767 114.24384018516541L 159.83148625585767 114.24384018516541L 167.78795848528543 114.24384018516541L 167.78795848528543 114.24384018516541L 167.78795848528543 114.24384018516541L 159.83148625585767 114.24384018516541" cy="16.755763227157587" cx="206.63426407602097" j="3" val="256" barHeight="97.48807695800782" barWidth="7.956472229427761"></path><path id="SvgjsPath2336" d="M 206.63426407602097 114.24384018516541L 206.63426407602097 76.24761417771445Q 210.61250019073486 72.26937806300057 214.59073630544873 76.24761417771445L 214.59073630544873 76.24761417771445L 214.59073630544873 114.24384018516541L 214.59073630544873 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 206.63426407602097 114.24384018516541L 206.63426407602097 76.24761417771445Q 210.61250019073486 72.26937806300057 214.59073630544873 76.24761417771445L 214.59073630544873 76.24761417771445L 214.59073630544873 114.24384018516541L 214.59073630544873 114.24384018516541z" pathFrom="M 206.63426407602097 114.24384018516541L 206.63426407602097 114.24384018516541L 214.59073630544873 114.24384018516541L 214.59073630544873 114.24384018516541L 214.59073630544873 114.24384018516541L 206.63426407602097 114.24384018516541" cy="74.2584961203575" cx="253.43704189618427" j="4" val="105" barHeight="39.9853440648079" barWidth="7.956472229427761"></path><path id="SvgjsPath2337" d="M 253.43704189618427 114.24384018516541L 253.43704189618427 92.24175180363763Q 257.41527801089813 88.26351568892375 261.39351412561206 92.24175180363763L 261.39351412561206 92.24175180363763L 261.39351412561206 114.24384018516541L 261.39351412561206 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 253.43704189618427 114.24384018516541L 253.43704189618427 92.24175180363763Q 257.41527801089813 88.26351568892375 261.39351412561206 92.24175180363763L 261.39351412561206 92.24175180363763L 261.39351412561206 114.24384018516541L 261.39351412561206 114.24384018516541z" pathFrom="M 253.43704189618427 114.24384018516541L 253.43704189618427 114.24384018516541L 261.39351412561206 114.24384018516541L 261.39351412561206 114.24384018516541L 261.39351412561206 114.24384018516541L 253.43704189618427 114.24384018516541" cy="90.25263374628068" cx="300.2398197163476" j="5" val="63" barHeight="23.99120643888474" barWidth="7.956472229427761"></path><path id="SvgjsPath2338" d="M 300.2398197163476 114.24384018516541L 300.2398197163476 52.256407738829715Q 304.21805583106146 48.278171624115835 308.1962919457754 52.256407738829715L 308.1962919457754 52.256407738829715L 308.1962919457754 114.24384018516541L 308.1962919457754 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 300.2398197163476 114.24384018516541L 300.2398197163476 52.256407738829715Q 304.21805583106146 48.278171624115835 308.1962919457754 52.256407738829715L 308.1962919457754 52.256407738829715L 308.1962919457754 114.24384018516541L 308.1962919457754 114.24384018516541z" pathFrom="M 300.2398197163476 114.24384018516541L 300.2398197163476 114.24384018516541L 308.1962919457754 114.24384018516541L 308.1962919457754 114.24384018516541L 308.1962919457754 114.24384018516541L 300.2398197163476 114.24384018516541" cy="50.267289681472775" cx="347.0425975365109" j="6" val="168" barHeight="63.976550503692636" barWidth="7.956472229427761"></path><path id="SvgjsPath2339" d="M 347.0425975365109 114.24384018516541L 347.0425975365109 33.215767707968816Q 351.0208336512248 29.237531593254936 354.9990697659387 33.215767707968816L 354.9990697659387 33.215767707968816L 354.9990697659387 114.24384018516541L 354.9990697659387 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 347.0425975365109 114.24384018516541L 347.0425975365109 33.215767707968816Q 351.0208336512248 29.237531593254936 354.9990697659387 33.215767707968816L 354.9990697659387 33.215767707968816L 354.9990697659387 114.24384018516541L 354.9990697659387 114.24384018516541z" pathFrom="M 347.0425975365109 114.24384018516541L 347.0425975365109 114.24384018516541L 354.9990697659387 114.24384018516541L 354.9990697659387 114.24384018516541L 354.9990697659387 114.24384018516541L 347.0425975365109 114.24384018516541" cy="31.226649650611876" cx="393.84537535667425" j="7" val="218" barHeight="83.01719053455354" barWidth="7.956472229427761"></path><path id="SvgjsPath2340" d="M 393.84537535667425 114.24384018516541L 393.84537535667425 88.81443659808265Q 397.8236114713881 84.83620048336877 401.80184758610204 88.81443659808265L 401.80184758610204 88.81443659808265L 401.80184758610204 114.24384018516541L 401.80184758610204 114.24384018516541z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 393.84537535667425 114.24384018516541L 393.84537535667425 88.81443659808265Q 397.8236114713881 84.83620048336877 401.80184758610204 88.81443659808265L 401.80184758610204 88.81443659808265L 401.80184758610204 114.24384018516541L 401.80184758610204 114.24384018516541z" pathFrom="M 393.84537535667425 114.24384018516541L 393.84537535667425 114.24384018516541L 401.80184758610204 114.24384018516541L 401.80184758610204 114.24384018516541L 401.80184758610204 114.24384018516541L 393.84537535667425 114.24384018516541" cy="86.8253185407257" cx="440.6481531768376" j="8" val="72" barHeight="27.4185216444397" barWidth="7.956472229427761"></path></g><g id="SvgjsG2341" class="apexcharts-series" seriesName="Expense" rel="2" data:realIndex="1"><path id="SvgjsPath2343" d="M 19.42315279536777 114.24384018516541L 19.42315279536777 167.47257821730508Q 23.40138891008165 171.45081433201898 27.37962502479553 167.47257821730508L 27.37962502479553 167.47257821730508L 27.37962502479553 114.24384018516541L 27.37962502479553 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 19.42315279536777 114.24384018516541L 19.42315279536777 167.47257821730508Q 23.40138891008165 171.45081433201898 27.37962502479553 167.47257821730508L 27.37962502479553 167.47257821730508L 27.37962502479553 114.24384018516541L 27.37962502479553 114.24384018516541z" pathFrom="M 19.42315279536777 114.24384018516541L 19.42315279536777 114.24384018516541L 27.37962502479553 114.24384018516541L 27.37962502479553 114.24384018516541L 27.37962502479553 114.24384018516541L 19.42315279536777 114.24384018516541" cy="169.46169627466202" cx="66.22593061553107" j="0" val="-145" barHeight="-55.21785608949662" barWidth="7.956472229427761"></path><path id="SvgjsPath2344" d="M 66.22593061553107 114.24384018516541L 66.22593061553107 142.71974617718593Q 70.20416673024495 146.69798229189982 74.18240284495883 142.71974617718593L 74.18240284495883 142.71974617718593L 74.18240284495883 114.24384018516541L 74.18240284495883 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 66.22593061553107 114.24384018516541L 66.22593061553107 142.71974617718593Q 70.20416673024495 146.69798229189982 74.18240284495883 142.71974617718593L 74.18240284495883 142.71974617718593L 74.18240284495883 114.24384018516541L 74.18240284495883 114.24384018516541z" pathFrom="M 66.22593061553107 114.24384018516541L 66.22593061553107 114.24384018516541L 74.18240284495883 114.24384018516541L 74.18240284495883 114.24384018516541L 74.18240284495883 114.24384018516541L 66.22593061553107 114.24384018516541" cy="144.70886423454286" cx="113.02870843569437" j="1" val="-80" barHeight="-30.465024049377444" barWidth="7.956472229427761"></path><path id="SvgjsPath2345" d="M 113.02870843569437 114.24384018516541L 113.02870843569437 135.10349016484156Q 117.00694455040825 139.08172627955545 120.98518066512213 135.10349016484156L 120.98518066512213 135.10349016484156L 120.98518066512213 114.24384018516541L 120.98518066512213 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 113.02870843569437 114.24384018516541L 113.02870843569437 135.10349016484156Q 117.00694455040825 139.08172627955545 120.98518066512213 135.10349016484156L 120.98518066512213 135.10349016484156L 120.98518066512213 114.24384018516541L 120.98518066512213 114.24384018516541z" pathFrom="M 113.02870843569437 114.24384018516541L 113.02870843569437 114.24384018516541L 120.98518066512213 114.24384018516541L 120.98518066512213 114.24384018516541L 120.98518066512213 114.24384018516541L 113.02870843569437 114.24384018516541" cy="137.0926082221985" cx="159.83148625585767" j="2" val="-60" barHeight="-22.848768037033086" barWidth="7.956472229427761"></path><path id="SvgjsPath2346" d="M 159.83148625585767 114.24384018516541L 159.83148625585767 180.80102623890772Q 163.80972237057156 184.77926235362162 167.78795848528543 180.80102623890772L 167.78795848528543 180.80102623890772L 167.78795848528543 114.24384018516541L 167.78795848528543 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 159.83148625585767 114.24384018516541L 159.83148625585767 180.80102623890772Q 163.80972237057156 184.77926235362162 167.78795848528543 180.80102623890772L 167.78795848528543 180.80102623890772L 167.78795848528543 114.24384018516541L 167.78795848528543 114.24384018516541z" pathFrom="M 159.83148625585767 114.24384018516541L 159.83148625585767 114.24384018516541L 167.78795848528543 114.24384018516541L 167.78795848528543 114.24384018516541L 167.78795848528543 114.24384018516541L 159.83148625585767 114.24384018516541" cy="182.79014429626466" cx="206.63426407602097" j="3" val="-180" barHeight="-68.54630411109925" barWidth="7.956472229427761"></path><path id="SvgjsPath2347" d="M 206.63426407602097 114.24384018516541L 206.63426407602097 150.3360021895303Q 210.61250019073486 154.31423830424418 214.59073630544873 150.3360021895303L 214.59073630544873 150.3360021895303L 214.59073630544873 114.24384018516541L 214.59073630544873 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 206.63426407602097 114.24384018516541L 206.63426407602097 150.3360021895303Q 210.61250019073486 154.31423830424418 214.59073630544873 150.3360021895303L 214.59073630544873 150.3360021895303L 214.59073630544873 114.24384018516541L 214.59073630544873 114.24384018516541z" pathFrom="M 206.63426407602097 114.24384018516541L 206.63426407602097 114.24384018516541L 214.59073630544873 114.24384018516541L 214.59073630544873 114.24384018516541L 214.59073630544873 114.24384018516541L 206.63426407602097 114.24384018516541" cy="152.32512024688722" cx="253.43704189618427" j="4" val="-100" barHeight="-38.081280061721806" barWidth="7.956472229427761"></path><path id="SvgjsPath2348" d="M 253.43704189618427 114.24384018516541L 253.43704189618427 135.10349016484156Q 257.41527801089813 139.08172627955545 261.39351412561206 135.10349016484156L 261.39351412561206 135.10349016484156L 261.39351412561206 114.24384018516541L 261.39351412561206 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 253.43704189618427 114.24384018516541L 253.43704189618427 135.10349016484156Q 257.41527801089813 139.08172627955545 261.39351412561206 135.10349016484156L 261.39351412561206 135.10349016484156L 261.39351412561206 114.24384018516541L 261.39351412561206 114.24384018516541z" pathFrom="M 253.43704189618427 114.24384018516541L 253.43704189618427 114.24384018516541L 261.39351412561206 114.24384018516541L 261.39351412561206 114.24384018516541L 261.39351412561206 114.24384018516541L 253.43704189618427 114.24384018516541" cy="137.0926082221985" cx="300.2398197163476" j="5" val="-60" barHeight="-22.848768037033086" barWidth="7.956472229427761"></path><path id="SvgjsPath2349" d="M 300.2398197163476 114.24384018516541L 300.2398197163476 144.62381018027202Q 304.21805583106146 148.6020462949859 308.1962919457754 144.62381018027202L 308.1962919457754 144.62381018027202L 308.1962919457754 114.24384018516541L 308.1962919457754 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 300.2398197163476 114.24384018516541L 300.2398197163476 144.62381018027202Q 304.21805583106146 148.6020462949859 308.1962919457754 144.62381018027202L 308.1962919457754 144.62381018027202L 308.1962919457754 114.24384018516541L 308.1962919457754 114.24384018516541z" pathFrom="M 300.2398197163476 114.24384018516541L 300.2398197163476 114.24384018516541L 308.1962919457754 114.24384018516541L 308.1962919457754 114.24384018516541L 308.1962919457754 114.24384018516541L 300.2398197163476 114.24384018516541" cy="146.61292823762895" cx="347.0425975365109" j="6" val="-85" barHeight="-32.36908805246354" barWidth="7.956472229427761"></path><path id="SvgjsPath2350" d="M 347.0425975365109 114.24384018516541L 347.0425975365109 140.81568217409983Q 351.0208336512248 144.79391828881373 354.9990697659387 140.81568217409983L 354.9990697659387 140.81568217409983L 354.9990697659387 114.24384018516541L 354.9990697659387 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 347.0425975365109 114.24384018516541L 347.0425975365109 140.81568217409983Q 351.0208336512248 144.79391828881373 354.9990697659387 140.81568217409983L 354.9990697659387 140.81568217409983L 354.9990697659387 114.24384018516541L 354.9990697659387 114.24384018516541z" pathFrom="M 347.0425975365109 114.24384018516541L 347.0425975365109 114.24384018516541L 354.9990697659387 114.24384018516541L 354.9990697659387 114.24384018516541L 354.9990697659387 114.24384018516541L 347.0425975365109 114.24384018516541" cy="142.80480023145677" cx="393.84537535667425" j="7" val="-75" barHeight="-28.560960046291356" barWidth="7.956472229427761"></path><path id="SvgjsPath2351" d="M 393.84537535667425 114.24384018516541L 393.84537535667425 150.3360021895303Q 397.8236114713881 154.31423830424418 401.80184758610204 150.3360021895303L 401.80184758610204 150.3360021895303L 401.80184758610204 114.24384018516541L 401.80184758610204 114.24384018516541z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskj1smuujr)" pathTo="M 393.84537535667425 114.24384018516541L 393.84537535667425 150.3360021895303Q 397.8236114713881 154.31423830424418 401.80184758610204 150.3360021895303L 401.80184758610204 150.3360021895303L 401.80184758610204 114.24384018516541L 401.80184758610204 114.24384018516541z" pathFrom="M 393.84537535667425 114.24384018516541L 393.84537535667425 114.24384018516541L 401.80184758610204 114.24384018516541L 401.80184758610204 114.24384018516541L 401.80184758610204 114.24384018516541L 393.84537535667425 114.24384018516541" cy="152.32512024688722" cx="440.6481531768376" j="8" val="-100" barHeight="-38.081280061721806" barWidth="7.956472229427761"></path></g><g id="SvgjsG2331" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2342" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2400" x1="0" y1="0" x2="421.2250003814697" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2401" x1="0" y1="0" x2="421.2250003814697" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2402" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2403" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2404" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2381" class="apexcharts-yaxis" rel="0" transform="translate(24.774999618530273, 0)"><g id="SvgjsG2382" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2383" font-family="Helvetica, Arial, sans-serif" x="20" y="11.5" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2384">300</tspan></text><text id="SvgjsText2385" font-family="Helvetica, Arial, sans-serif" x="20" y="49.581280061721806" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2386">200</tspan></text><text id="SvgjsText2387" font-family="Helvetica, Arial, sans-serif" x="20" y="87.66256012344361" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2388">100</tspan></text><text id="SvgjsText2389" font-family="Helvetica, Arial, sans-serif" x="20" y="125.74384018516542" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2390">0</tspan></text><text id="SvgjsText2391" font-family="Helvetica, Arial, sans-serif" x="20" y="163.82512024688722" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2392">-100</tspan></text><text id="SvgjsText2393" font-family="Helvetica, Arial, sans-serif" x="20" y="201.90640030860902" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2394">-200</tspan></text></g></g><g id="SvgjsG2319" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 115px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 529px; height: 346px;"></div></div><div class="contract-trigger"></div></div></div>
                                <div class="col-md-4 col-12 budget-wrapper" style="position: relative;">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            2020
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">2020</a>
                                            <a class="dropdown-item" href="#">2019</a>
                                            <a class="dropdown-item" href="#">2018</a>
                                        </div>
                                    </div>
                                    <h2 class="mb-25">$25,852</h2>
                                    <div class="d-flex justify-content-center">
                                        <span class="fw-bolder me-25">Budget:</span>
                                        <span>56,800</span>
                                    </div>
                                    <div id="budget-chart" style="min-height: 80px;"><div id="apexcharts9rzd732c" class="apexcharts-canvas apexcharts9rzd732c apexcharts-theme-light" style="width: 180px; height: 80px;"><svg id="SvgjsSvg2405" width="180" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2407" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2406"><clipPath id="gridRectMask9rzd732c"><rect id="SvgjsRect2412" width="186" height="82" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask9rzd732c"><rect id="SvgjsRect2413" width="184" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2411" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2423" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2424" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2426" class="apexcharts-grid"><g id="SvgjsG2427" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2429" x1="0" y1="0" x2="180" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2430" x1="0" y1="20" x2="180" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2431" x1="0" y1="40" x2="180" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2432" x1="0" y1="60" x2="180" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2433" x1="0" y1="80" x2="180" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2428" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2435" x1="0" y1="80" x2="180" y2="80" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2434" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2414" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2415" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2418" d="M 0 19C 6.3 19 11.7 32 18 32C 24.3 32 29.7 11 36 11C 42.3 11 47.7 28 54 28C 60.3 28 65.7 20 72 20C 78.3 20 83.7 40 90 40C 96.3 40 101.7 1 108 1C 114.3 1 119.7 20 126 20C 132.3 20 137.7 21 144 21C 150.3 21 155.7 37 162 37C 168.3 37 173.7 18 180 18" fill="none" fill-opacity="1" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask9rzd732c)" pathTo="M 0 19C 6.3 19 11.7 32 18 32C 24.3 32 29.7 11 36 11C 42.3 11 47.7 28 54 28C 60.3 28 65.7 20 72 20C 78.3 20 83.7 40 90 40C 96.3 40 101.7 1 108 1C 114.3 1 119.7 20 126 20C 132.3 20 137.7 21 144 21C 150.3 21 155.7 37 162 37C 168.3 37 173.7 18 180 18" pathFrom="M -1 80L -1 80L 18 80L 36 80L 54 80L 72 80L 90 80L 108 80L 126 80L 144 80L 162 80L 180 80"></path><g id="SvgjsG2416" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2419" class="apexcharts-series" seriesName="seriesx2" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2422" d="M 0 60C 6.3 60 11.7 70 18 70C 24.3 70 29.7 50 36 50C 42.3 50 47.7 65 54 65C 60.3 65 65.7 57 72 57C 78.3 57 83.7 80 90 80C 96.3 80 101.7 55 108 55C 114.3 55 119.7 65 126 65C 132.3 65 137.7 60 144 60C 150.3 60 155.7 75 162 75C 168.3 75 173.7 53 180 53" fill="none" fill-opacity="1" stroke="rgba(220,218,227,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="5" class="apexcharts-line" index="1" clip-path="url(#gridRectMask9rzd732c)" pathTo="M 0 60C 6.3 60 11.7 70 18 70C 24.3 70 29.7 50 36 50C 42.3 50 47.7 65 54 65C 60.3 65 65.7 57 72 57C 78.3 57 83.7 80 90 80C 96.3 80 101.7 55 108 55C 114.3 55 119.7 65 126 65C 132.3 65 137.7 60 144 60C 150.3 60 155.7 75 162 75C 168.3 75 173.7 53 180 53" pathFrom="M -1 80L -1 80L 18 80L 36 80L 54 80L 72 80L 90 80L 108 80L 126 80L 144 80L 162 80L 180 80"></path><g id="SvgjsG2420" class="apexcharts-series-markers-wrap" data:realIndex="1"></g></g><g id="SvgjsG2417" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2421" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2436" x1="0" y1="0" x2="180" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2437" x1="0" y1="0" x2="180" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2438" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2439" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2440" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2410" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2425" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2408" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div></div></div>
                                    <button type="button" class="btn btn-primary waves-effect waves-float waves-light">Increase Budget</button>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 265px; height: 346px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <!--/ Revenue Report Card -->
                </div>

                <div class="row match-height">
                    <!-- Company Table Card -->
                    <div class="col-lg-8 col-12">
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Company</th>
                                                <th>Category</th>
                                                <th>Views</th>
                                                <th>Revenue</th>
                                                <th>Sales</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="/vuexy_assets/app-assets/images/icons/toolbox.svg" alt="Toolbar svg">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="fw-bolder">Dixons</div>
                                                            <div class="font-small-2 text-muted">meguc@ruj.io</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-primary me-1">
                                                            <div class="avatar-content">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor font-medium-3"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                                                            </div>
                                                        </div>
                                                        <span>Technology</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">23.4k</span>
                                                        <span class="font-small-2 text-muted">in 24 hours</span>
                                                    </div>
                                                </td>
                                                <td>$891.2</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bolder me-1">68%</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-danger font-medium-1"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="/vuexy_assets/app-assets/images/icons/parachute.svg" alt="Parachute svg">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="fw-bolder">Motels</div>
                                                            <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-success me-1">
                                                            <div class="avatar-content">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee font-medium-3"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                                            </div>
                                                        </div>
                                                        <span>Grocery</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">78k</span>
                                                        <span class="font-small-2 text-muted">in 2 days</span>
                                                    </div>
                                                </td>
                                                <td>$668.51</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bolder me-1">97%</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="/vuexy_assets/app-assets/images/icons/brush.svg" alt="Brush svg">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="fw-bolder">Zipcar</div>
                                                            <div class="font-small-2 text-muted">davcilse@is.gov</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-warning me-1">
                                                            <div class="avatar-content">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                                                            </div>
                                                        </div>
                                                        <span>Fashion</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">162</span>
                                                        <span class="font-small-2 text-muted">in 5 days</span>
                                                    </div>
                                                </td>
                                                <td>$522.29</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bolder me-1">62%</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="/vuexy_assets/app-assets/images/icons/star.svg" alt="Star svg">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="fw-bolder">Owning</div>
                                                            <div class="font-small-2 text-muted">us@cuhil.gov</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-primary me-1">
                                                            <div class="avatar-content">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor font-medium-3"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                                                            </div>
                                                        </div>
                                                        <span>Technology</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">214</span>
                                                        <span class="font-small-2 text-muted">in 24 hours</span>
                                                    </div>
                                                </td>
                                                <td>$291.01</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bolder me-1">88%</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="/vuexy_assets/app-assets/images/icons/book.svg" alt="Book svg">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="fw-bolder">Cafés</div>
                                                            <div class="font-small-2 text-muted">pudais@jife.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-success me-1">
                                                            <div class="avatar-content">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee font-medium-3"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                                            </div>
                                                        </div>
                                                        <span>Grocery</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">208</span>
                                                        <span class="font-small-2 text-muted">in 1 week</span>
                                                    </div>
                                                </td>
                                                <td>$783.93</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bolder me-1">16%</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-danger font-medium-1"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="/vuexy_assets/app-assets/images/icons/rocket.svg" alt="Rocket svg">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="fw-bolder">Kmart</div>
                                                            <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-warning me-1">
                                                            <div class="avatar-content">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                                                            </div>
                                                        </div>
                                                        <span>Fashion</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">990</span>
                                                        <span class="font-small-2 text-muted">in 1 month</span>
                                                    </div>
                                                </td>
                                                <td>$780.05</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bolder me-1">78%</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="/vuexy_assets/app-assets/images/icons/speaker.svg" alt="Speaker svg">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="fw-bolder">Payers</div>
                                                            <div class="font-small-2 text-muted">luk@izug.io</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar bg-light-warning me-1">
                                                            <div class="avatar-content">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                                                            </div>
                                                        </div>
                                                        <span>Fashion</span>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="fw-bolder mb-25">12.9k</span>
                                                        <span class="font-small-2 text-muted">in 12 hours</span>
                                                    </div>
                                                </td>
                                                <td>$531.49</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bolder me-1">42%</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->

                    <!-- Developer Meetup Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-developer-meetup">
                            <div class="meetup-img-wrapper rounded-top text-center">
                                <img src="/vuexy_assets/app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170">
                            </div>
                            <div class="card-body">
                                <div class="meetup-header d-flex align-items-center">
                                    <div class="meetup-day">
                                        <h6 class="mb-0">THU</h6>
                                        <h3 class="mb-0">24</h3>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="card-title mb-25">Developer Meetup</h4>
                                        <p class="card-text mb-0">Meet world popular developers</p>
                                    </div>
                                </div>
                                <div class="mt-0">
                                    <div class="avatar float-start bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        </div>
                                    </div>
                                    <div class="more-info">
                                        <h6 class="mb-0">Sat, May 25, 2020</h6>
                                        <small>10:AM to 6:PM</small>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="avatar float-start bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        </div>
                                    </div>
                                    <div class="more-info">
                                        <h6 class="mb-0">Central Park</h6>
                                        <small>Manhattan, New york City</small>
                                    </div>
                                </div>
                                <div class="avatar-group">
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Billy Hopkins">
                                        <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Amy Carson">
                                        <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Brandon Miles">
                                        <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Daisy Weber">
                                        <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Jenny Looper">
                                        <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33">
                                    </div>
                                    <h6 class="align-self-center cursor-pointer ms-50 mb-0">+42</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Developer Meetup Card -->

                    <!-- Browser States Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-browser-states">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">Browser States</h4>
                                    <p class="card-text font-small-2">Counter August 2020</p>
                                </div>
                                <div class="dropdown chart-dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer" data-bs-toggle="dropdown"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="browser-states">
                                    <div class="d-flex">
                                        <img src="/vuexy_assets/app-assets/images/icons/google-chrome.png" class="rounded me-1" height="30" alt="Google Chrome">
                                        <h6 class="align-self-center mb-0">Google Chrome</h6>
                                    </div>
                                    <div class="d-flex align-items-center" style="position: relative;">
                                        <div class="fw-bold text-body-heading me-1">54.4%</div>
                                        <div id="browser-state-chart-primary" style="min-height: 35.7px;"><div id="apexcharts3wgfutxtk" class="apexcharts-canvas apexcharts3wgfutxtk apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg2441" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2443" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs2442"><clipPath id="gridRectMask3wgfutxtk"><rect id="SvgjsRect2445" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask3wgfutxtk"><rect id="SvgjsRect2446" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2447" class="apexcharts-radialbar"><g id="SvgjsG2448"><g id="SvgjsG2449" class="apexcharts-tracks"><g id="SvgjsG2450" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG2452"><g id="SvgjsG2455" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2456" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 26.649258182615842 41.68542541152726" fill="none" fill-opacity="0.85" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="196" data:value="54.4" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 26.649258182615842 41.68542541152726"></path></g><circle id="SvgjsCircle2453" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2454" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine2457" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2458" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2444" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 87px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                                <div class="browser-states">
                                    <div class="d-flex">
                                        <img src="/vuexy_assets/app-assets/images/icons/mozila-firefox.png" class="rounded me-1" height="30" alt="Mozila Firefox">
                                        <h6 class="align-self-center mb-0">Mozila Firefox</h6>
                                    </div>
                                    <div class="d-flex align-items-center" style="position: relative;">
                                        <div class="fw-bold text-body-heading me-1">6.1%</div>
                                        <div id="browser-state-chart-warning" style="min-height: 35.7px;"><div id="apexcharts8m201xyt" class="apexcharts-canvas apexcharts8m201xyt apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg2459" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2461" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs2460"><clipPath id="gridRectMask8m201xyt"><rect id="SvgjsRect2463" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask8m201xyt"><rect id="SvgjsRect2464" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2465" class="apexcharts-radialbar"><g id="SvgjsG2466"><g id="SvgjsG2467" class="apexcharts-tracks"><g id="SvgjsG2468" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG2470"><g id="SvgjsG2473" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2474" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 34.55384566401036 18.728836464521155" fill="none" fill-opacity="0.85" stroke="rgba(255,159,67,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="22" data:value="6.1" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 34.55384566401036 18.728836464521155"></path></g><circle id="SvgjsCircle2471" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2472" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine2475" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2476" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2462" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 74px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                                <div class="browser-states">
                                    <div class="d-flex">
                                        <img src="/vuexy_assets/app-assets/images/icons/apple-safari.png" class="rounded me-1" height="30" alt="Apple Safari">
                                        <h6 class="align-self-center mb-0">Apple Safari</h6>
                                    </div>
                                    <div class="d-flex align-items-center" style="position: relative;">
                                        <div class="fw-bold text-body-heading me-1">14.6%</div>
                                        <div id="browser-state-chart-secondary" style="min-height: 35.7px;"><div id="apexchartswvm6atqti" class="apexcharts-canvas apexchartswvm6atqti apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg2477" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2479" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs2478"><clipPath id="gridRectMaskwvm6atqti"><rect id="SvgjsRect2481" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskwvm6atqti"><rect id="SvgjsRect2482" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2483" class="apexcharts-radialbar"><g id="SvgjsG2484"><g id="SvgjsG2485" class="apexcharts-tracks"><g id="SvgjsG2486" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG2488"><g id="SvgjsG2491" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2492" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.70848596494321 22.684131080750916" fill="none" fill-opacity="0.85" stroke="rgba(130,134,139,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="53" data:value="14.6" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.70848596494321 22.684131080750916"></path></g><circle id="SvgjsCircle2489" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2490" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine2493" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2494" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2480" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 84px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                                <div class="browser-states">
                                    <div class="d-flex">
                                        <img src="/vuexy_assets/app-assets/images/icons/internet-explorer.png" class="rounded me-1" height="30" alt="Internet Explorer">
                                        <h6 class="align-self-center mb-0">Internet Explorer</h6>
                                    </div>
                                    <div class="d-flex align-items-center" style="position: relative;">
                                        <div class="fw-bold text-body-heading me-1">4.2%</div>
                                        <div id="browser-state-chart-info" style="min-height: 35.7px;"><div id="apexchartscxv75w5p" class="apexcharts-canvas apexchartscxv75w5p apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg2495" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2497" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs2496"><clipPath id="gridRectMaskcxv75w5p"><rect id="SvgjsRect2499" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskcxv75w5p"><rect id="SvgjsRect2500" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2501" class="apexcharts-radialbar"><g id="SvgjsG2502"><g id="SvgjsG2503" class="apexcharts-tracks"><g id="SvgjsG2504" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG2506"><g id="SvgjsG2509" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2510" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 33.14629268950116 18.257875827299152" fill="none" fill-opacity="0.85" stroke="rgba(0,207,232,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="15" data:value="4.2" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 33.14629268950116 18.257875827299152"></path></g><circle id="SvgjsCircle2507" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2508" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine2511" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2512" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2498" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 79px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                                <div class="browser-states">
                                    <div class="d-flex">
                                        <img src="/vuexy_assets/app-assets/images/icons/opera.png" class="rounded me-1" height="30" alt="Opera Mini">
                                        <h6 class="align-self-center mb-0">Opera Mini</h6>
                                    </div>
                                    <div class="d-flex align-items-center" style="position: relative;">
                                        <div class="fw-bold text-body-heading me-1">8.4%</div>
                                        <div id="browser-state-chart-danger" style="min-height: 35.7px;"><div id="apexcharts786hin84" class="apexcharts-canvas apexcharts786hin84 apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg2513" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2515" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs2514"><clipPath id="gridRectMask786hin84"><rect id="SvgjsRect2517" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask786hin84"><rect id="SvgjsRect2518" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2519" class="apexcharts-radialbar"><g id="SvgjsG2520"><g id="SvgjsG2521" class="apexcharts-tracks"><g id="SvgjsG2522" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG2524"><g id="SvgjsG2527" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2528" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 36.07817073170732 19.472299475604824" fill="none" fill-opacity="0.85" stroke="rgba(234,84,85,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="30" data:value="8.4" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 36.07817073170732 19.472299475604824"></path></g><circle id="SvgjsCircle2525" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2526" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine2529" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2530" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2516" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 79px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Browser States Card -->

                    <!-- Goal Overview Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Goal Overview</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle font-medium-3 text-muted cursor-pointer"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            </div>
                            <div class="card-body p-0" style="position: relative;">
                                <div id="goal-overview-radial-bar-chart" class="my-2" style="min-height: 205.633px;"><div id="apexchartstew9t0yq" class="apexcharts-canvas apexchartstew9t0yq apexcharts-theme-light" style="width: 382px; height: 205.633px;"><svg id="SvgjsSvg2531" width="382" height="205.63333333333335" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2533" class="apexcharts-inner apexcharts-graphical" transform="translate(68.5, -10)"><defs id="SvgjsDefs2532"><clipPath id="gridRectMasktew9t0yq"><rect id="SvgjsRect2535" width="251" height="217" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasktew9t0yq"><rect id="SvgjsRect2536" width="249" height="219" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2541" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2542" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="0"></stop><stop id="SvgjsStop2543" stop-opacity="1" stop-color="rgba(235,233,241,1)" offset="1"></stop><stop id="SvgjsStop2544" stop-opacity="1" stop-color="rgba(235,233,241,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2551" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2552" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="0"></stop><stop id="SvgjsStop2553" stop-opacity="1" stop-color="rgba(81,229,168,1)" offset="1"></stop><stop id="SvgjsStop2554" stop-opacity="1" stop-color="rgba(81,229,168,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter2556" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2557" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood2557Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2558" in="SvgjsFeFlood2557Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2558Out"></feComposite><feOffset id="SvgjsFeOffset2559" dx="1" dy="1" result="SvgjsFeOffset2559Out" in="SvgjsFeComposite2558Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2560" stdDeviation="3 " result="SvgjsFeGaussianBlur2560Out" in="SvgjsFeOffset2559Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2561" result="SvgjsFeMerge2561Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2562" in="SvgjsFeGaussianBlur2560Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2563" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2564" in="SourceGraphic" in2="SvgjsFeMerge2561Out" mode="normal" result="SvgjsFeBlend2564Out"></feBlend></filter></defs><g id="SvgjsG2537" class="apexcharts-radialbar"><g id="SvgjsG2538"><g id="SvgjsG2539" class="apexcharts-tracks"><g id="SvgjsG2540" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 77.85670731707313 184.82445114399715 A 89.28658536585367 89.28658536585367 0 1 1 167.14329268292684 184.82445114399718" fill="none" fill-opacity="1" stroke="rgba(235,233,241,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.5304878048780495" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 77.85670731707313 184.82445114399715 A 89.28658536585367 89.28658536585367 0 1 1 167.14329268292684 184.82445114399718"></path></g></g><g id="SvgjsG2546"><g id="SvgjsG2550" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2555" d="M 77.85670731707313 184.82445114399715 A 89.28658536585367 89.28658536585367 0 1 1 210.6873193374061 121.46749921697622" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2551)" stroke-opacity="1" stroke-linecap="round" stroke-width="7.060975609756099" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="249" data:value="83" filter="url(#SvgjsFilter2556)" index="0" j="0" data:pathOrig="M 77.85670731707313 184.82445114399715 A 89.28658536585367 89.28658536585367 0 1 1 210.6873193374061 121.46749921697622"></path></g><circle id="SvgjsCircle2547" r="82.52134146341464" cx="122.5" cy="107.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2548" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2549" font-family="Helvetica, Arial, sans-serif" x="122.5" y="123.5" text-anchor="middle" dominant-baseline="auto" font-size="2.86rem" font-weight="600" fill="#5e5873" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">83%</text></g></g></g></g><line id="SvgjsLine2565" x1="0" y1="0" x2="245" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2566" x1="0" y1="0" x2="245" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2534" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                <div class="row border-top text-center mx-0">
                                    <div class="col-6 border-end py-1">
                                        <p class="card-text text-muted mb-0">Completed</p>
                                        <h3 class="fw-bolder mb-0">786,617</h3>
                                    </div>
                                    <div class="col-6 py-1">
                                        <p class="card-text text-muted mb-0">In Progress</p>
                                        <h3 class="fw-bolder mb-0">13,561</h3>
                                    </div>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 383px; height: 324px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                    <!--/ Goal Overview Card -->

                    <!-- Transaction Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-transaction">
                            <div class="card-header">
                                <h4 class="card-title">Transactions</h4>
                                <div class="dropdown chart-dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer" data-bs-toggle="dropdown"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div class="avatar bg-light-primary rounded float-start">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pocket avatar-icon font-medium-3"><path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path><polyline points="8 10 12 14 16 10"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">Wallet</h6>
                                            <small>Starbucks</small>
                                        </div>
                                    </div>
                                    <div class="fw-bolder text-danger">- $74</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div class="avatar bg-light-success rounded float-start">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check avatar-icon font-medium-3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">Bank Transfer</h6>
                                            <small>Add Money</small>
                                        </div>
                                    </div>
                                    <div class="fw-bolder text-success">+ $480</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div class="avatar bg-light-danger rounded float-start">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign avatar-icon font-medium-3"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">Paypal</h6>
                                            <small>Add Money</small>
                                        </div>
                                    </div>
                                    <div class="fw-bolder text-success">+ $590</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div class="avatar bg-light-warning rounded float-start">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card avatar-icon font-medium-3"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">Mastercard</h6>
                                            <small>Ordered Food</small>
                                        </div>
                                    </div>
                                    <div class="fw-bolder text-danger">- $23</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div class="avatar bg-light-info rounded float-start">
                                            <div class="avatar-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon font-medium-3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">Transfer</h6>
                                            <small>Refund</small>
                                        </div>
                                    </div>
                                    <div class="fw-bolder text-success">+ $98</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Transaction Card -->
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
@endsection
