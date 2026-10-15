# Project Report: Vaal Roast Coffee Co. (Web Development 3.2)
**Subject:** Small-batch coffee roaster and student café, Vanderbijlpark. **Audience:** VUT students, lecturers, locals.
## 1. Design process
Sitemap: Home → (Menu section, dropdown) → About → Contact. Wireframes mobile-first; hero, benefits, menu, testimonial, video, links.
## 2. Style guide
Colours: Espresso #2A1D18, Kettle teal #1F5E57, Copper #B9622E, Steam #F7F5F2, Mist #E6ECEA (contrast ≥ 4.5:1). Fonts: Fraunces (headings), Work Sans (body). Nav: no text-decoration, hover = teal background.
## 3. Technologies and rubric mapping
- HTML: headings, span, lists, tables, figure/figcaption, blockquote, details, address, time, video, iframe.
- CSS: variables, grid/flex, media queries (800px), dark theme, focus states.
- PHP: shared header/footer includes, EN/AF language switch (includes/lang.php), server-side form validation and saving to messages.log.
- JavaScript (5 features): mobile nav, dark mode, menu search/filter, form validation, back-to-top.
- External links: Wikipedia, SCA, ICO, VUT, social media, OpenStreetMap.
- File naming: lowercase, hyphenated (hero-coffee-bar.svg); folders css/, js/, images/, includes/, videos/.
- FTP: upload the folder with FileZilla to a PHP host (e.g. freedev/InfinityFree) into public_html.
## 4. Challenges and solutions
1. Keeping two languages consistent → one array per language and a t() helper.
2. Dropdown on touch screens → shown expanded inside the mobile menu.
3. Table readability on phones → overflow-x wrapper.
4. Spam/XSS in form → strip_tags, filter_var, htmlspecialchars.
## 5. To finish before submitting
Replace the placeholder video (videos/roasting.mp4), swap SVG art for real photos (JPG/WebP), put in your real business details and your own name/student number.
