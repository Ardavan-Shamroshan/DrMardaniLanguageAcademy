<div class="page-content-inner">
    <h3>The <code>Home</code> livewire component is loaded from the <code>Home</code> module.</h3>

    <!--Lifestyle Dashboard V4-->
    <div class="lifestyle-dashboard lifestyle-dashboard-v4">

        <div class="columns">

            <div class="column is-8">

                <div class="columns is-multiline">
                    <!--Header-->
                    <div class="column is-12">
                        <div class="illustration-header-2">
                            <div class="header-image">
                                <img src="{{ asset('admin/assets/img/illustrations/dashboards/lifestyle/reading.svg') }}" alt="">
                            </div>
                            <div class="header-meta">
                                <h3>Hello, Erik.</h3>
                                <p>Have any ideas for a new article? If not, you should definitely check the
                                    feed for some inspiration.</p>
                                <button class="button h-button is-light is-outlined">
                                                        <span class="icon is-small">
                                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                      </span>
                                    <span>New Article</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--Content-->
                    <div class="column is-12">

                        <div class="writing-stats">
                            <div class="columns is-multiline is-flex-tablet-p">

                                <!--Tile-->
                                <div class="column is-3">
                                    <div class="health-tile">
                                        <div class="tile-head">
                                            <div class="h-icon is-primary">
                                                <i aria-hidden="true" class="fas fa-tint"></i>
                                            </div>
                                            <h4>
                                                <span class="dark-inverted">114/90</span>
                                                <span>Min/Max</span>
                                            </h4>
                                        </div>
                                        <h3 class="dark-inverted">Blood</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Illis videtur.</p>
                                    </div>
                                </div>

                                <!--Tile-->
                                <div class="column is-3">
                                    <div class="health-tile">
                                        <div class="tile-head">
                                            <div class="h-icon is-primary">
                                                <i aria-hidden="true" class="fas fa-heart"></i>
                                            </div>
                                            <h4>
                                                <span class="dark-inverted">112</span>
                                                <span>Bpm</span>
                                            </h4>
                                        </div>
                                        <h3 class="dark-inverted">Heart Rate</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Illis videtur.</p>
                                    </div>
                                </div>

                                <!--Tile-->
                                <div class="column is-3">
                                    <div class="health-tile">
                                        <div class="tile-head">
                                            <div class="h-icon is-primary">
                                                <i aria-hidden="true" class="fas fa-pump-medical"></i>
                                            </div>
                                            <h4>
                                                <span class="dark-inverted">12/14</span>
                                                <span>units</span>
                                            </h4>
                                        </div>
                                        <h3 class="dark-inverted">Blood Pressure</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Illis videtur.</p>
                                    </div>
                                </div>

                                <!--Tile-->
                                <div class="column is-3">
                                    <div class="health-tile">
                                        <div class="tile-head">
                                            <div class="h-icon is-primary">
                                                <i aria-hidden="true" class="fas fa-weight"></i>
                                            </div>
                                            <h4>
                                                <span class="dark-inverted">60.4</span>
                                                <span>lbs</span>
                                            </h4>
                                        </div>
                                        <h3 class="dark-inverted">Weight</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Illis videtur.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!--Feed-->
            <div class="column is-4">
                <div class="widget picker-widget">
                    <div class="widget-toolbar">
                        <div class="left">
                            <a class="action-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </a>
                        </div>
                        <div class="center">
                            <h3>October 2020</h3>
                        </div>
                        <div class="right">
                            <a class="action-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <table class="calendar">

                        <thead>

                        <tr>

                            <td>Mon</td>
                            <td>Tue</td>
                            <td>Wed</td>
                            <td>Thu</td>
                            <td>Fri</td>
                            <td>Sat</td>
                            <td>Sun</td>

                        </tr>

                        </thead>

                        <tbody>

                        <tr>
                            <td class="prev-month">29</td>
                            <td class="prev-month">30</td>
                            <td class="prev-month">31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td class="current-day">18</td>
                        </tr>

                        <tr>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                        </tr>

                        <tr>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td>31</td>
                            <td class="next-month">1</td>
                        </tr>

                        </tbody>

                    </table>
                </div>
            </div>

        </div>

        <div class="columns is-12">
            <div class="card-grid card-grid-v4">

                <!--List Empty Search Placeholder -->
                <div class="page-placeholder custom-text-filter-placeholder is-hidden">
                    <div class="placeholder-content">
                        <img class="light-image" src="{{ asset('admin/assets/img/illustrations/placeholders/search-4.svg') }}" alt="">
                        <img class="dark-image" src="{{ asset('admin/assets/img/illustrations/placeholders/search-4-dark.svg') }}" alt="">
                        <h3>We couldn't find any matching results.</h3>
                        <p class="is-larger">Too bad. Looks like we couldn't find any matching results for the
                            search terms you've entered. Please try different search terms or criteria.</p>
                    </div>
                </div>

                <div class="columns is-multiline">
                    <!--Grid item-->
                    <div class="column is-3">
                        <a href="#" class="card-grid-item">
                            <img src="https://via.placeholder.com/400x300" data-demo-src="{{ asset('admin/assets/img/photo/demo/22.jpg') }}" alt="">
                            <div class="card-grid-item-content">
                                <h3 class="dark-inverted">Using flashy colors in your websites and apps </h3>
                            </div>
                            <div class="card-grid-item-footer">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{ asset('admin/assets/img/avatars/photos/9.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Ana B.</span>
                                    <span>3 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Grid item-->
                    <div class="column is-3">
                        <a href="#" class="card-grid-item">
                            <img src="https://via.placeholder.com/400x300" data-demo-src="{{ asset('admin/assets/img/photo/demo/23.jpg') }}" alt="">
                            <div class="card-grid-item-content">
                                <h3 class="dark-inverted">
                                    Why it pays to profile your customers </h3>
                            </div>
                            <div class="card-grid-item-footer">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{ asset('admin/assets/img/avatars/photos/40.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Jeanne M.</span>
                                    <span>3 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Grid item-->
                    <div class="column is-3">
                        <a href="#" class="card-grid-item">
                            <img src="https://via.placeholder.com/400x300" data-demo-src="{{ asset('admin/assets/img/photo/demo/24.jpg') }}" alt="">
                            <div class="card-grid-item-content">
                                <h3 class="dark-inverted">
                                    Building a consistent and talented team </h3>
                            </div>
                            <div class="card-grid-item-footer">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{ asset('admin/assets/img/avatars/photos/19.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Greta K.</span>
                                    <span>3 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Grid item-->
                    <div class="column is-3">
                        <a href="#" class="card-grid-item">
                            <img src="https://via.placeholder.com/400x300" data-demo-src="{{ asset('admin/assets/img/photo/demo/25.jpg') }}" alt="">
                            <div class="card-grid-item-content">
                                <h3 class="dark-inverted">
                                    Building a consistent and talented team </h3>
                            </div>
                            <div class="card-grid-item-footer">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{ asset('admin/assets/img/avatars/photos/28.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Edouard F.</span>
                                    <span>3 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Grid item-->
                    <div class="column is-3">
                        <a href="#" class="card-grid-item">
                            <img src="https://via.placeholder.com/400x300" data-demo-src="{{ asset('admin/assets/img/photo/demo/26.jpg') }}" alt="">
                            <div class="card-grid-item-content">
                                <h3 class="dark-inverted">
                                    What framework to choose to build a mobile app in 2020? </h3>
                            </div>
                            <div class="card-grid-item-footer">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{ asset('admin/assets/img/avatars/photos/5.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Mary L.</span>
                                    <span>3 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Grid item-->
                    <div class="column is-3">
                        <a href="#" class="card-grid-item">
                            <img src="https://via.placeholder.com/400x300" data-demo-src="{{ asset('admin/assets/img/photo/demo/27.jpg') }}" alt="">
                            <div class="card-grid-item-content">
                                <h3 class="dark-inverted">
                                    Diving into building an e-commerce brand - part 1 </h3>
                            </div>
                            <div class="card-grid-item-footer">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{ asset('admin/assets/img/avatars/photos/33.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Harvey M.</span>
                                    <span>4 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Grid item-->
                    <div class="column is-3">
                        <a href="#" class="card-grid-item">
                            <img src="https://via.placeholder.com/400x300" data-demo-src="{{ asset('admin/assets/img/photo/demo/28.jpg') }}" alt="">
                            <div class="card-grid-item-content">
                                <h3 class="dark-inverted">
                                    Diving into building an e-commerce brand - part 2 </h3>
                            </div>
                            <div class="card-grid-item-footer">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{ asset('admin/assets/img/avatars/photos/33.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Harvey M.</span>
                                    <span>4 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Grid item-->
                    <div class="column is-3">
                        <a href="#" class="card-grid-item">
                            <img src="https://via.placeholder.com/400x300" data-demo-src="{{ asset('admin/assets/img/photo/demo/29.jpg') }}" alt="">
                            <div class="card-grid-item-content">
                                <h3 class="dark-inverted">
                                    How to make sure to reach the goals you set </h3>
                            </div>
                            <div class="card-grid-item-footer">
                                <div class="h-avatar is-small">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="{{ asset('admin/assets/img/avatars/photos/31.jpg') }}" alt="">
                                </div>
                                <div class="meta">
                                    <span class="dark-inverted">Yasseen A.</span>
                                    <span>4 days ago</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <!--Infinite Loader-->
                <div class="infinite-scroll-loader" data-filter-hide="">
                    <div class="infinite-scroll-loader-inner">
                        <div class="loader is-loading"></div>
                        <div class="loader-end is-hidden">
                            <span>No more items to load</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
