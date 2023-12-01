<?php

namespace App\UseCases;

use App\Exceptions\NotaNotFoundException;
use App\Exceptions\OndaNotFoundException;
use App\Repositories\Interfaces\IBateriaRepository;
use App\Repositories\Interfaces\IOndaRepository;
use App\Repositories\Interfaces\ISurfistaRepository;

class pegarVencedorBateriaUseCase
{
    public function __construct(
        private IBateriaRepository $bateriaRepository,
        private IOndaRepository $ondaRepository,
        private ISurfistaRepository $surfistaRepository
    ) {
    }
    public function execute(int $bateria_id)
    {
        $bateria = $this->bateriaRepository->find($bateria_id);
        $primeiroSurfistaId = $bateria->surfista_1_id;
        $segundoSurfistaId = $bateria->surfista_2_id;

        $ondasPrimeiro = $this->bateriaRepository->pegarOndasDoSurfistaNaBateria($primeiroSurfistaId, $bateria_id);
        $notaPrimeiro = $this->pegarNotaFinal($ondasPrimeiro);

        $ondasSegundo = $this->bateriaRepository->pegarOndasDoSurfistaNaBateria($segundoSurfistaId, $bateria_id);
        $notaSegundo = $this->pegarNotaFinal($ondasSegundo);

        if (!$ondasPrimeiro->toArray() || !$ondasPrimeiro->toArray()) {
            throw new OndaNotFoundException();
        }

        if ($notaPrimeiro > $notaSegundo) {
            return $this->surfistaRepository->where('id', $primeiroSurfistaId)->get();
        }

        return $this->surfistaRepository->where('id', $segundoSurfistaId)->get();
    }

    public function pegarNotaFinal($ondas): int
    {
        $ondas = $ondas->toArray();
        $notasFinaisOndas = [];
        foreach($ondas as $onda) {
            $notasParciais = $onda['nota'];

            if (!$notasParciais) {
                throw new NotaNotFoundException();
            }

            $notaFinal = $notasParciais['nota_parcial_1'] + $notasParciais['nota_parcial_2'] + $notasParciais['nota_parcial_3'];
            array_push($notasFinaisOndas, $notaFinal / 3);
        }

        rsort($notasFinaisOndas);
        $maiores = array_slice($notasFinaisOndas, 0, 2);
        return array_sum($maiores);
    }
}
