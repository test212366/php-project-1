
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>



 
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'bg-gray-50   p-10 rounded max-w-lg mx-auto mt-24']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-gray-50   p-10 rounded max-w-lg mx-auto mt-24']); ?>
<header class="text-center">
	 <h2 class="text-2xl font-bold uppercase mb-1">
		  Create a Gig
	 </h2>
	 <p class="mb-4">Post a gig to find a developer</p>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data">
	 
	<?php echo csrf_field(); ?>

	<div class="mb-6">
		  <label
				for="company"
				class="inline-block text-lg mb-2"
				>Company Name</label
		  >
		  <input
				type="text"
				class="border border-gray-200 rounded p-2 w-full"
				name="company"
				value="<?php echo e(old('company')); ?>"
		  />

		  <?php $__errorArgs = ['company'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
		 	<p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> 
		 
		  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	 </div>

	 <div class="mb-6">
		  <label for="title" class="inline-block text-lg mb-2"
				>Job Title</label
		  >
		  <input
				type="text"
				class="border border-gray-200 rounded p-2 w-full"
				name="title"
				placeholder="Example: Senior Laravel Developer"
				
		  />
		  
	 </div>

	 <div class="mb-6">
		  <label
				for="location"
				class="inline-block text-lg mb-2"
				>Job Location</label
		  >
		  <input
				type="text"
				class="border border-gray-200 rounded p-2 w-full"
				name="location"
				placeholder="Example: Remote, Boston MA, etc"
				value="<?php echo e(old('location')); ?>"
			/>

		  <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> 
		
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	 </div>

	 <div class="mb-6">
		  <label for="email" class="inline-block text-lg mb-2"
				>Contact Email</label
		  >
		  <input
				type="text"
				class="border border-gray-200 rounded p-2 w-full"
				name="email"
				value="<?php echo e(old('email')); ?>"

		  />
		  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
		  <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> 
	  
		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	 </div>

	 <div class="mb-6">
		  <label
				for="website"
				class="inline-block text-lg mb-2"
		  >
				Website/Application URL
		  </label>
		  <input
				type="text"
				class="border border-gray-200 rounded p-2 w-full"
				name="website"
				value="<?php echo e(old('website')); ?>"

		  />
		  <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> 
		
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	 </div>

	 <div class="mb-6">
		  <label for="tags" class="inline-block text-lg mb-2">
				Tags (Comma Separated)
		  </label>
		  <input
				type="text"
				class="border border-gray-200 rounded p-2 w-full"
				name="tags"
				placeholder="Example: Laravel, Backend, Postgres, etc"
				value="<?php echo e(old('tags')); ?>"
		 
			/>
		  <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> 
		
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	 </div>

	 <div class="mb-6">
		  <label for="logo" class="inline-block text-lg mb-2">
				Company Logo
		  </label>
		  <input
				type="file"
				class="border border-gray-200 rounded p-2 w-full"
				name="logo"
		  />
		  <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			  <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> 
		  
		  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	 </div>

	 <div class="mb-6">
		  <label
				for="description"
				class="inline-block text-lg mb-2"
		  >
				Job Description
		  </label>
		  <textarea
				class="border border-gray-200 rounded p-2 w-full"
				name="description"
				rows="10"
				placeholder="Include tasks, requirements, salary, etc"
				value="<?php echo e(old('description')); ?>"

		  ></textarea>
		  <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> 
		
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	 </div>

	 <div class="mb-6">
		  <button
				class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
		  >
				Create Gig
		  </button>

		  <a href="/" class="text-black ml-4"> Back </a>
	 </div>
</form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH C:\Users\User\Desktop\2\example-app\resources\views/listings/create.blade.php ENDPATH**/ ?>