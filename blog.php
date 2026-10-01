<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Blog - Latest Medical News & Insights | Prayag Hospital</title>
    <meta name="description" content="Read expert medical articles, health tips, and wellness insights from Prayag Hospital Noida doctors and healthcare specialists.">

    <?php include 'header-links.php'; ?>

</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Health Blog</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="blog-hero-section">
        <div class="container">
            <div class="blog-hero-content">
                <h1 class="blog-hero-title">Health & Wellness Blog</h1>
                <p class="blog-hero-subtitle">Expert insights, medical guidance, and healthcare tips from the medical team at Prayag Hospital</p>

                <!-- Blog Search Bar -->
                <div class="blog-search-wrapper">
                    <div class="blog-search-input-group">
                        <i class="fas fa-search"></i>
                        <input type="text" id="blogSearch" class="blog-search-input"
                            placeholder="Search articles by title, specialty, or topic...">
                    </div>
                    <button class="btn-blog-search" type="button" id="btnSearchSubmit">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content Section -->
    <section class="blog-content-section">
        <div class="container">
            <div class="row">
                <!-- Main Content Area -->
                <div class="col-lg-8">
                    <!-- Category Pills -->
                    <div class="category-pills-wrapper">
                        <button class="category-pill active" data-category="all">All Posts</button>
                        <button class="category-pill" data-category="womens-health">Women's Health</button>
                        <button class="category-pill" data-category="diagnostics">Diagnostics & Imaging</button>
                        <button class="category-pill" data-category="emergency-care">Emergency Care</button>
                    </div>

                    <!-- Results Info -->
                    <div class="blog-results-header">
                        <h3>Showing <span id="blogCount">4</span> Articles</h3>
                        <div class="blog-sort-wrapper">
                            <label for="blogSort">Sort by:</label>
                            <select id="blogSort" class="blog-sort-select">
                                <option value="newest">Newest First</option>
                                <option value="oldest">Oldest First</option>
                                <option value="popular">Most Popular</option>
                            </select>
                        </div>
                    </div>

                    <!-- Blog Posts Grid -->
                    <div class="blog-posts-grid" id="blogPostsGrid">
                        <!-- Blog Post 1: 10 Things Every Woman Should Know -->
                        <article class="blog-post-card" data-category="womens-health" data-date="2026-08-24" data-popularity="1020">
                            <a href="10-things-every-woman-should-know-about-choosing-a-gynecologist-in-noida.php" class="blog-post-image">
                                <img src="assets/images/blog/10-things-every-women-should-know.webp"
                                    alt="10 Things Every Woman Should Know About Choosing a Gynecologist in Noida" loading="lazy">
                                <span class="blog-category-badge" style="background:#4A8F73;">Women's Health</span>
                            </a>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Aug 24, 2026</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 6 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 1,020 views</span>
                                </div>
                                <h3 class="blog-post-title">
                                    <a href="10-things-every-woman-should-know-about-choosing-a-gynecologist-in-noida.php">10 Things Every Woman Should Know About Choosing a Gynecologist in Noida</a>
                                </h3>
                                <p class="blog-post-excerpt">Choosing the right gynecologist is vital. Discover 10 essential factors every woman should consider—from expertise & safety to affordable ultrasound & maternity care.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="assets/images/favicon.png" alt="Prayag Hospital" class="author-avatar">
                                        <span>Prayag Hospital</span>
                                    </div>
                                    <a href="10-things-every-woman-should-know-about-choosing-a-gynecologist-in-noida.php" class="btn-read-more">Read Article <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 2: Ultrasound in Noida -->
                        <article class="blog-post-card" data-category="diagnostics" data-date="2026-08-17" data-popularity="960">
                            <a href="ultrasound-in-noida.php" class="blog-post-image">
                                <img src="assets/images/blog/ultrasound-in-noida.webp"
                                    alt="Ultrasound in Noida: Types, Uses, Preparation" loading="lazy">
                                <span class="blog-category-badge" style="background:#0284c7;">Diagnostics</span>
                            </a>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Aug 17, 2026</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 6 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 960 views</span>
                                </div>
                                <h3 class="blog-post-title">
                                    <a href="ultrasound-in-noida.php">Ultrasound in Noida: Types, Uses, Preparation & When You May Need One</a>
                                </h3>
                                <p class="blog-post-excerpt">Looking for an ultrasound in Noida? Learn about scan types (2D, 3D, 4D, Color Doppler), preparation tips, and pregnancy ultrasound care at Prayag Hospital.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="assets/images/favicon.png" alt="Prayag Hospital" class="author-avatar">
                                        <span>Prayag Hospital</span>
                                    </div>
                                    <a href="ultrasound-in-noida.php" class="btn-read-more">Read Article <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 3: Emergency Hospital in Noida -->
                        <article class="blog-post-card" data-category="emergency-care" data-date="2026-08-10" data-popularity="990">
                            <a href="emergency-hospital-in-noida.php" class="blog-post-image">
                                <img src="assets/images/blog/emergency-hospital-in-noida.webp"
                                    alt="Emergency Hospital in Noida" loading="lazy">
                                <span class="blog-category-badge" style="background:#d32f2f;">Emergency Care</span>
                            </a>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Aug 10, 2026</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 5 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 990 views</span>
                                </div>
                                <h3 class="blog-post-title">
                                    <a href="emergency-hospital-in-noida.php">Emergency Hospital in Noida: 10 Warning Signs You Should Never Ignore</a>
                                </h3>
                                <p class="blog-post-excerpt">Know the 10 critical warning signs that need an emergency hospital in Noida. Learn how acting quickly saves lives and what to do in medical emergencies.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="assets/images/favicon.png" alt="Prayag Hospital" class="author-avatar">
                                        <span>Prayag Hospital</span>
                                    </div>
                                    <a href="emergency-hospital-in-noida.php" class="btn-read-more">Read Article <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>

                        <!-- Blog Post 4: Best Gynecologist in Noida -->
                        <article class="blog-post-card" data-category="womens-health" data-date="2026-08-03" data-popularity="980">
                            <a href="best-gynecologist-in-noida.php" class="blog-post-image">
                                <img src="assets/images/blog/best-gynocologist-in-india.webp"
                                    alt="Best Gynecologist in Noida" loading="lazy">
                                <span class="blog-category-badge" style="background:#4A8F73;">Women's Health</span>
                            </a>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <span class="meta-item"><i class="far fa-calendar"></i> Aug 03, 2026</span>
                                    <span class="meta-item"><i class="far fa-clock"></i> 6 min read</span>
                                    <span class="meta-item"><i class="far fa-eye"></i> 980 views</span>
                                </div>
                                <h3 class="blog-post-title">
                                    <a href="best-gynecologist-in-noida.php">Best Gynecologist in Noida: When Should You See a Gynecologist?</a>
                                </h3>
                                <p class="blog-post-excerpt">Wondering when to see the best gynecologist in Noida? Learn the signs, screenings, PCOS guidance and life stages that need a gynecologist visit.</p>
                                <div class="blog-post-footer">
                                    <div class="author-info">
                                        <img src="assets/images/favicon.png" alt="Prayag Hospital" class="author-avatar">
                                        <span>Prayag Hospital</span>
                                    </div>
                                    <a href="best-gynecologist-in-noida.php" class="btn-read-more">Read Article <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- No Results Message -->
                    <div class="blog-no-results" id="blogNoResults" style="display: none;">
                        <i class="fas fa-search"></i>
                        <h3>No Articles Found</h3>
                        <p>Try different keywords or browse our categories below.</p>
                    </div>

                    <!-- Pagination -->
                    <div class="blog-pagination" id="blogPagination">
                        <button class="pagination-btn" disabled><i class="fas fa-chevron-left"></i> Previous</button>
                        <div class="pagination-numbers">
                            <button class="pagination-number active">1</button>
                        </div>
                        <button class="pagination-btn" disabled>Next <i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <!-- Popular Posts -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Featured Articles</h3>
                            <div class="popular-posts-list">
                                <a href="10-things-every-woman-should-know-about-choosing-a-gynecologist-in-noida.php" class="popular-post-item">
                                    <img src="assets/images/blog/10-things-every-women-should-know.webp" alt="Choosing a Gynecologist">
                                    <div class="popular-post-content">
                                        <h4>10 Things Every Woman Should Know About Choosing a Gynecologist</h4>
                                        <span class="popular-post-date"><i class="far fa-calendar"></i> Aug 24, 2026</span>
                                    </div>
                                </a>
                                <a href="ultrasound-in-noida.php" class="popular-post-item">
                                    <img src="assets/images/blog/ultrasound-in-noida.webp" alt="Ultrasound in Noida">
                                    <div class="popular-post-content">
                                        <h4>Ultrasound in Noida: Types, Uses, Preparation & Guide</h4>
                                        <span class="popular-post-date"><i class="far fa-calendar"></i> Aug 17, 2026</span>
                                    </div>
                                </a>
                                <a href="emergency-hospital-in-noida.php" class="popular-post-item">
                                    <img src="assets/images/blog/emergency-hospital-in-noida.webp" alt="Emergency Hospital in Noida">
                                    <div class="popular-post-content">
                                        <h4>Emergency Hospital in Noida: 10 Warning Signs You Should Never Ignore</h4>
                                        <span class="popular-post-date"><i class="far fa-calendar"></i> Aug 10, 2026</span>
                                    </div>
                                </a>
                                <a href="best-gynecologist-in-noida.php" class="popular-post-item">
                                    <img src="assets/images/blog/best-gynocologist-in-india.webp" alt="Best Gynecologist in Noida">
                                    <div class="popular-post-content">
                                        <h4>When Should You See a Gynecologist? Key Signs & Advice</h4>
                                        <span class="popular-post-date"><i class="far fa-calendar"></i> Aug 03, 2026</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="categories-list">
                                <li>
                                    <a href="#" class="sidebar-category-link" data-category="womens-health">
                                        <span><i class="fas fa-female"></i> Women's Health</span>
                                        <span>2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-category-link" data-category="diagnostics">
                                        <span><i class="fas fa-x-ray"></i> Diagnostics & Imaging</span>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-category-link" data-category="emergency-care">
                                        <span><i class="fas fa-ambulance"></i> Emergency Care</span>
                                        <span>1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Newsletter Subscribe -->
                        

                        <!-- Tags Cloud -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Popular Topics</h3>
                            <div class="tags-cloud">
                                <a href="#" class="tag-item" data-tag="gynecologist">Gynecologist</a>
                                <a href="#" class="tag-item" data-tag="women">Women's Health</a>
                                <a href="#" class="tag-item" data-tag="ultrasound">Ultrasound</a>
                                <a href="#" class="tag-item" data-tag="pregnancy">Pregnancy Care</a>
                                <a href="#" class="tag-item" data-tag="emergency">Emergency Care</a>
                                <a href="#" class="tag-item" data-tag="diagnostics">Diagnostics</a>
                                <a href="#" class="tag-item" data-tag="pcos">PCOS Treatment</a>
                                <a href="#" class="tag-item" data-tag="maternity">Maternity</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Blog Filtering and Search Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const blogPosts = document.querySelectorAll('.blog-post-card');
            const searchInput = document.getElementById('blogSearch');
            const btnSearchSubmit = document.getElementById('btnSearchSubmit');
            const categoryPills = document.querySelectorAll('.category-pill');
            const sidebarCatLinks = document.querySelectorAll('.sidebar-category-link');
            const tagItems = document.querySelectorAll('.tag-item');
            const sortSelect = document.getElementById('blogSort');
            const blogCount = document.getElementById('blogCount');
            const noResults = document.getElementById('blogNoResults');
            let activeCategory = 'all';

            function filterBlogPosts() {
                const searchTerm = searchInput.value.toLowerCase().trim();
                let visibleCount = 0;

                blogPosts.forEach(post => {
                    const category = post.dataset.category;
                    const title = post.querySelector('.blog-post-title').textContent.toLowerCase();
                    const excerpt = post.querySelector('.blog-post-excerpt').textContent.toLowerCase();

                    const matchesSearch = searchTerm === '' || title.includes(searchTerm) || excerpt.includes(searchTerm);
                    const matchesCategory = activeCategory === 'all' || activeCategory === category;

                    if (matchesSearch && matchesCategory) {
                        post.style.display = 'flex';
                        visibleCount++;
                    } else {
                        post.style.display = 'none';
                    }
                });

                blogCount.textContent = visibleCount;
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
                const pagination = document.getElementById('blogPagination');
                if (pagination) {
                    pagination.style.display = visibleCount === 0 ? 'none' : 'flex';
                }
            }

            function setCategory(cat) {
                activeCategory = cat;
                categoryPills.forEach(p => {
                    if (p.dataset.category === cat) {
                        p.classList.add('active');
                    } else {
                        p.classList.remove('active');
                    }
                });
                filterBlogPosts();
            }

            // Search input typing
            searchInput.addEventListener('input', filterBlogPosts);
            if (btnSearchSubmit) {
                btnSearchSubmit.addEventListener('click', filterBlogPosts);
            }

            // Category pills filtering
            categoryPills.forEach(pill => {
                pill.addEventListener('click', function () {
                    setCategory(this.dataset.category);
                });
            });

            // Sidebar category links
            sidebarCatLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    setCategory(this.dataset.category);
                    window.scrollTo({ top: document.querySelector('.blog-content-section').offsetTop - 80, behavior: 'smooth' });
                });
            });

            // Tag clicks
            tagItems.forEach(tag => {
                tag.addEventListener('click', function (e) {
                    e.preventDefault();
                    const tagVal = this.dataset.tag || this.textContent.trim();
                    searchInput.value = tagVal;
                    filterBlogPosts();
                    window.scrollTo({ top: document.querySelector('.blog-content-section').offsetTop - 80, behavior: 'smooth' });
                });
            });

            // Sorting functionality
            sortSelect.addEventListener('change', function () {
                const sortValue = this.value;
                const grid = document.getElementById('blogPostsGrid');
                const postsArray = Array.from(blogPosts);

                postsArray.sort((a, b) => {
                    if (sortValue === 'newest') {
                        return new Date(b.dataset.date) - new Date(a.dataset.date);
                    } else if (sortValue === 'oldest') {
                        return new Date(a.dataset.date) - new Date(b.dataset.date);
                    } else if (sortValue === 'popular') {
                        return parseInt(b.dataset.popularity) - parseInt(a.dataset.popularity);
                    }
                });

                postsArray.forEach(post => grid.appendChild(post));
            });

            // Newsletter form submit
            const newsletterForm = document.getElementById('newsletterForm');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function (e) {
                    e.preventDefault();
                    alert('Thank you for subscribing to Prayag Hospital insights!');
                    this.reset();
                });
            }

            // Check URL query parameters for category
            const urlParams = new URLSearchParams(window.location.search);
            const initialCat = urlParams.get('category');
            if (initialCat) {
                setCategory(initialCat);
            } else {
                filterBlogPosts();
            }
        });
    </script>

    <?php include 'footer-links.php'; ?>

</body>

</html>