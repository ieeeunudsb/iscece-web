import {env} from "./env";

async function getPostBySlugAndCategory(categoryName, slugName) {
    if (!slugName || !categoryName) return "";
    const cName = await getCategoryByName(categoryName);
    const posts = await $.ajax({url: `${env.API}/posts?categories=${cName}`});
    // console.log("posts", posts)

    if (!posts) return "";
    return posts.map(post => {
        if (post.slug === slugName) return post.content?.rendered;
    }).join("");
}

async function getCategoryByName(categoryName) {
    const categories = await $.ajax({url: `${env.API}/categories?slug=${categoryName}`});
    // console.log("categories", categories)

    if (!categories) return "";
    return categories[0].id;
}

export {getPostBySlugAndCategory, getCategoryByName}