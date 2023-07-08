<aside
    class="p-v-400 bg-secondary-200"
    aria-hidden="false"
    data-element="sidebar"
>
    <div class="aside__top m-v-b-600">
        <div class="aside__top__left">
            <a href="#" class="brand" aria-label="Work Logger">
                <img
                    src="{{ asset('assets/images/logo.svg') }}"
                    alt="logo"
                    width="80"
                    height="80"
                />
            </a>
        </div>
        <div class="aside__top__right">
            <button class="btn btn-primary">
                Logout <i class="fa fa-sign-out"></i>
            </button>

            <button
            class="btn btn-link btn-link-danger"
            style="--btn-fz: var(--fz-500)"
            data-element="btn-close-menu"
            aria-label="Close"
            >
                <i class="fa fa-times"></i>
            </button>
        </div>
    </div>

    <ul class="menu flow" role="list">
    <li class="menu-item" data-active="true" aria-hidden="true">
        <a href="dashboard.html" class="menu-item__link">
            <i class="fa-solid fa-sharp fa-dashboard"></i> Dashboard
        </a>
    </li>
    <li class="menu-item" data-active="true" aria-hidden="true">
        <a href="#" class="menu-item__link menu-item__label">
            <i class="fa-solid fa-sharp fa-boxes"></i> Module Pages
        </a>

        <div class="sub-menu-wrapper">
            <div>
                <ul class="sub-menu flow" role="list">
                <li style="--flow-spacer: var(--size-v-100)">
                    <a href="listing" class="menu-item__link">
                        <i class="fa-solid fa-sharp fa-list"></i> Listing Page
                    </a>
                </li>
                <li style="--flow-spacer: var(--size-v-100)">
                    <a href="cards" class="menu-item__link">
                        <i class="fa-solid fa-sharp fa-cards-blank"></i> Cards Page
                    </a>
                </li>
                <li style="--flow-spacer: var(--size-v-100)">
                    <a href="create-edit" class="menu-item__link">
                        <i class="fa-solid fa-sharp fa-pencil"></i> Create/Edit Page
                    </a>
                </li>
                <li style="--flow-spacer: var(--size-v-100)">
                    <a href="view" class="menu-item__link">
                        <i class="fa-solid fa-sharp fa-eye"></i> View Page
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </li>
    </ul>
</aside>