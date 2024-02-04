@include('admin.alerts.flash')
<div class="">
    <label class="block text-sm text-gray-600" for="name">Name</label>
    <input class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text"  placeholder="Seu Nome" aria-label="Name" value="{{ $user->name ?? old('name')  }}">
</div>
<div class="mt-2">
    <label class="block text-sm text-gray-600" for="email">Email</label>
    <input class="w-full px-5  py-2 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="email"  placeholder="Seu E-mail" aria-label="Email" value="{{ $user->email ?? old('email') }}">
</div>
<div class="mt-2">
    <label class=" block text-sm text-gray-600" for="message">Senha</label>
    <input class="w-full px-5  py-2 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password"  placeholder="Sua Senha" aria-label="Password">
</div>
<div class="mt-6">
    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Salvar</button>
</div>
