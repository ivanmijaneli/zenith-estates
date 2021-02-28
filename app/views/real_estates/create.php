<?php
partial('header'); ?>

    <div class="w-5/12 mx-auto my-12 p-12 text-white bg-indigo-300">
        <h1 class="mb-8 text-2xl text-center">Add Real Estate Ad</h1>
        <form action="../real-estates"
              method="POST"
              enctype="multipart/form-data">

            <div class="flex flex-col mb-4">
                <label for="city">City</label>
                <select name="city_id"
                        id="city"
                        class="p-1 mt-2 text-black">
                    <?php foreach ($cities as $key => $value): ?>
                        <option value="<?= $cities[$key]->id ?>"
                            <?= isset($old) && $old['city_id'] === $cities[$key]->id ? 'selected' : '' ?>
                        >
                            <?= $cities[$key]->name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?= isset($errors) && array_key_exists('city_id', $errors) ? '<p class="mt-1 text-sm text-red-500">' . $errors['city_id'] . '</p>' : '' ?>
            </div>

            <div class="flex flex-col mb-4">
                <label for="city">Ad Type</label>
                <select name="ad_type_id"
                        id="ad_type"
                        class="p-1 mt-2 text-black">
                    <?php foreach ($ad_types as $key => $value): ?>
                        <option value="<?= $ad_types[$key]->id ?>"
                            <?= isset($old) && $old['ad_type_id'] === $ad_types[$key]->id ? 'selected' : '' ?>
                        >
                            <?= $ad_types[$key]->name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?= isset($errors) && array_key_exists('ad_type_id', $errors) ? '<p class="mt-1 text-sm text-red-500">' . $errors['ad_type_id'] . '</p>' : '' ?>
            </div>

            <div class="flex flex-col mb-4">
                <label for="city">Real Estate Type</label>
                <select name="re_type_id"
                        id="re_type"
                        class="p-1 mt-2 text-black">
                    <?php foreach ($re_types as $key => $value): ?>
                        <option value="<?= $re_types[$key]->id ?>"
                            <?= isset($old) && $old['re_type_id'] === $re_types[$key]->id ? 'selected' : '' ?>
                        >
                            <?= $re_types[$key]->name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?= isset($errors) && array_key_exists('re_type_id', $errors) ? '<p class="mt-1 text-sm text-red-500">' . $errors['re_type_id'] . '</p>' : '' ?>
            </div>

            <div class="flex flex-col mb-4">
                <label for="area">Area</label>
                <input type="text"
                       name="area"
                       id="area"
                       value="<?= isset($old) ? $old['area'] : '' ?>"
                       class="p-1 mt-2 text-black">
                <?= isset($errors) && array_key_exists('area', $errors) ? '<p class="mt-1 text-sm text-red-500">' . $errors['area'] . '</p>' : '' ?>
            </div>

            <div class="flex flex-col mb-4">
                <label for=price"">Price</label>
                <input type="text"
                       name="price"
                       id="price"
                       value="<?= isset($old) ? $old['price'] : '' ?>"
                       class="p-1 mt-2 text-black">
                <?= isset($errors) && array_key_exists('price', $errors) ? '<p class="mt-1 text-sm text-red-500">' . $errors['price'] . '</p>' : '' ?>
            </div>

            <div class="flex flex-col mb-4">
                <label for="year">Year</label>
                <input type="text"
                       name="year"
                       id="year"
                       value="<?= isset($old) ? $old['year'] : '' ?>"
                       class="p-1 mt-2 text-black">
                <?= isset($errors) && array_key_exists('year', $errors) ? '<p class="mt-1 text-sm text-red-500">' . $errors['year'] . '</p>' : '' ?>
            </div>

            <div class="flex flex-col mb-4">
                <label for="description">Description</label>
                <textarea name="description"
                          id="description"
                          class="p-1 mt-2 text-black"><?= isset($old) ? $old['description'] : '' ?></textarea>
                <?= isset($errors) && array_key_exists('description', $errors) ? '<p class="mt-1 text-sm text-red-500">' . $errors['description'] . '</p>' : '' ?>
            </div>


            <div class="flex flex-col">
                <label for="photos">Add photos</label>
                <input type="file"
                       name="photos[]"
                       id="photos"
                       multiple
                       class="p-2 mt-2 border-2 border-white">
                <?= isset($errors) && array_key_exists('photos', $errors) ? '<p class="text-sm text-red-500">' . $errors['photos'] . '</p>' : '' ?>
            </div>

            <button class="p-3 mt-12 bg-indigo-500 w-full text-white text-lg">Submit</button>

        </form>
    </div>

<?php
partial('footer'); ?>