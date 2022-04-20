<div class="d-flex category-sidebar">
    <aside class="sidebar sidebar-fixed sticky-sidebar-wrapper">
        <div class="sidebar-overlay">
        </div>
        <a class="sidebar-close" href="#"><i class="p-icon-times"></i></a>
        <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
        <div class="sidebar-content">
            <div class="pin-wrapper" style="height: 785.797px;">
                <div class="sticky-sidebar widget-sidebar category-sidebar"
                     data-sticky-options="{'paddingOffsetTop': 100 }"
                     style="border-bottom: 0px none rgb(119, 119, 119); width: 249px;">
                    <h2 class="sidebar-title text-uppercase pt-4 mb-4">ALL Categories</h2>
                @if($categories)
                    @foreach ($categories as $category)
                        <div class="widget widget-collapsible">
                            <a href="{{ route('category.products', ['id' => $category->id, 'slug' => $category->category_name_en]) }}" class="widget-title collapsed">{{ $category->category_name_en }}</a>
                            <ul class="widget-body collapsible-line filter-items" style="display: none;">
                                @foreach ($category->subcategory as $subcategory)
                                        <div class="widget widget-collapsible">
                                            <a href="{{ route('subcategory.products', ['id' => $subcategory->id, 'slug' => $subcategory->subcategory_slug_en]) }}"
                                               class="widget-title collapsed" style="padding-left: 15px;">{{ $subcategory->subcategory_name_en }}</a>
                                            <ul class="widget-body collapsible-line filter-items"
                                                style="display: none;">
                                                @foreach ($subcategory->subsubcategory as $subsubcategory)
                                                    <div class="widget widget-collapsible">
                                                        <a href="{{ route('subsubcategory.products', ['id' => $subsubcategory->id, 'slug' => $subsubcategory->subsubcategory_slug_en]) }}" style="padding-left: 30px;">{{ $subsubcategory->subsubcategory_name_en }}</a>
                                                    </div>
                                                @endforeach
                                            </ul>
                                        </div>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </aside>
    @include('frontend.frontend_layout.home_page.new-products')
</div>

