<h5 class="text-center" >chercher par group</h5>
	<center>	<select style="width:50%" class="form-control" id="filterSelect" name="group">
			
		@foreach($groups as $group)
		<option value="{{$group->name}}">{{$group->name}}</option>
		@endforeach
		</select></center>
		<br>
		<script>
        const select = document.getElementById('filterSelect');
      

        select.addEventListener('change', () => {
			const cards = document.querySelectorAll('.card');
            let value = select.value;
           
            cards.forEach(card => {
                if (value === "tout les groupes" || card.classList.contains(value)) {
                    card.style.display = "block"; // Show selected card
                } else {
                    card.style.display = "none"; // Hide others
                }
            });
        });

        // Show all on load
        select.dispatchEvent(new Event('change'));
    </script>