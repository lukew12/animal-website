<main>
      <div class="animal-container" style="background-image: url('<?php echo $animal_image_path; ?>')">
        <div class="animal-overlay"></div>
        <div class="animal-content">
          <img class="tiger-image" src="<?php echo $animal_image_path; ?>" alt="A male Tiger" width="400" height="275">
          <h1><?php echo $animal; ?></h1>
        </div>
      </div>
      <div class="info">
        <h2 class="info-title">INFO</h2>
        <p class="info-context"><?php echo $animal_description; ?></p>
      </div>
      <div class="example-add-container">
          <div class="species">
              <h3 class="species-title">SPECIES EXAMPLES</h3>
              <ul class="species-context">
                <li class="T">The Sumatran Tiger</li>
                <li class="A">Amur (Siberian Tiger)</li>
                <li class="I">Indian (Bengal) Tiger</li>
                <li class="S">South China Tiger</li>
                <li class="M">Malayan Tiger</li>
              </ul>
          </div>
          <div class="new-animal">  
              <form>
                <h3 class="new-animal-title">NEW ANIMAL</h3>
                <div class="new-animal-context">
                  <p>Animal:
                  <br>
                  <input type="text" name="New animal name" size="10" maxlength="30">
                  </p>
                  <p>Description:
                  <br>
                  <textarea name="comments" cols="30" rows="10"></textarea>
                  </p>
                  <label for="animal-photo">Image:</label>
                  <input id="animal-photo" type="file" value="add-photo">
                  <input type="submit" name="Submit" value="Submit">
                </div>
              </form>
         </div>
      </div>
   </main>