<div>
    <div class="intro-excerpt text-center mt-5">
        <h2 class="animate__animated animate__pulse fs-1">Annunci {{ $search }}</h2>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                @if (session()->has('success'))
                    <div class="row">
                        <div class="col-12 text-center mt-3">
                            <p class="text-center fw-bolder shadow alert alert-success" role="alert">
                                {{ session()->get('success') }}</p>
                        </div>
                    </div>
                @endif
                <div class="input-group my-3">
                    <input wire:model="search" type="text" class="form-control" placeholder="Cerca annuncio...">
                </div>
                <table class="table border mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($announcements_to_check as $announcement_to_check)
                            <tr>
                                <td>{{ $announcement_to_check->title }}</td>
                                <td>{{ $announcement_to_check->category->name }}</td>
                                <td>
                                    @if ($announcement_to_check->is_accepted == true)
                                        <span>Annuncio accettato</span>
                                    @elseif (is_null($announcement_to_check->is_accepted))
                                        <span>Annuncio da controllare</span>
                                    @elseif ($announcement_to_check->is_accepted == false)
                                        <span>Annuncio rifiutato</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{ route('revisor.show', ['uri' => $announcement_to_check->uri]) }}"
                                            class="btn btn-secondary me-md-2">Visualizza</a>
                                        <button wire:click="destroy({{ $announcement_to_check->id }})"
                                            class="btn btn-danger me-md-2">Elimina</button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr colspan="4"> </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-2 mb-5">
                    {{-- MENUNAVIGAZIONE --}}
                    {{ $announcements_to_check->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
