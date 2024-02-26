<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

    <div class="rounded-xl border border-gray-200 bg-white shadow-md w-full p-4">
        <div class="grid md:grid-cols-9 sm:grid-cols-1 md:grid-rows-1 sm:grid-rows-4 gap-4">
            <div class="md:col-span-3 sm:col-span-9">
                <input type="text" id="name" class=" block w-full rounded-md border border-gray-200 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Direccion, Ciudad, Codigo postal..." />
            </div>
            <div class="md:col-span-2 sm:col-span-9">
                <div class="flex w-full max-w-2xl items-center justify-between rounded-md border">
                    <select id="status" class="border-0 w-full rounded-md outline-none focus:ring-0">
                        <option>$ Min.</option>
                        <option>Dispached Out</option>
                        <option>In Warehouse</option>
                        <option>Being Brought In</option>
                    </select>
                    <select id="status" class="border-0 w-full rounded-md outline-none focus:ring-0">
                        <option>$ Max.</option>
                        <option>Dispached Out</option>
                        <option>In Warehouse</option>
                        <option>Being Brought In</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col">
                <select id="status" class=" block w-full rounded-md border border-gray-200 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option>Tipo de Propiedad</option>
                    <option>In Warehouse</option>
                    <option>Being Brought In</option>
                </select>
            </div>

            <div class="flex flex-col">
                <select id="status" class=" block w-full rounded-md border border-gray-200 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option>Habitaciones</option>
                    <option>In Warehouse</option>
                    <option>Being Brought In</option>
                </select>
            </div>

            <div class="flex flex-col">
                <select id="status" class=" block w-full rounded-md border border-gray-200 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <option>Baños</option>
                    <option>In Warehouse</option>
                    <option>Being Brought In</option>
                </select>
            </div>

            <div class="flex flex-col">
                <button class="active:scale-95 rounded-lg bg-blue-600 px-8 py-2 font-medium text-white outline-none focus:ring hover:opacity-90">Buscar</button>
            </div>
        </div>


    </div>

</div>
