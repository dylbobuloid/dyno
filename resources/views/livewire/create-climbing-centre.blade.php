<div>
    <form wire:submit="save">
 
        
        <label for="name">Centre Name:</label><br>
        <input type="text" id="name" name="name" placeholder="The Nest" wire:model="name">

        <div>
            @error('name') <span class="error">{{ $message }}</span> @enderror 
        </div>

        <br>
  

        <label for="location">Centre Location:</label><br>
        <input type="text" id="location" name="location" placeholder="Hayes" wire:model="location">

        <div>
            @error('location') <span class="error">{{ $message }}</span> @enderror 
        </div>

        <input type="checkbox" id="indoors" name="indoors" wire:model="indoors">
        <label for="indoors"> indoors </label><br>
    
        <br>
        <br>  
        <input type="submit" value="Submit">
    
    </form>
</div>
