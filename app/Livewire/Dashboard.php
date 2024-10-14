<?php

namespace App\Livewire;

use App\Models\SalesCommission;
use Gemini\Laravel\Facades\Gemini;
use Livewire\Component;

class Dashboard extends Component
{

    public $config;
    public string $question;
    public array $dataset;

    public function render()
    {
        return view('livewire.dashboard');
    }

    protected $rules = [
        'question' => 'required|min:10'
    ];

    public function generateReport()
    {

        $this->validate();

        $fields = implode(',', SalesCommission::getColumns());

        $result = Gemini::geminiFlash()
            ->generateContent(
                "Considerando a lista de campos ($fields), gere uma configuração json do Vega-lite v5 (sem campo de dados e com descrição) que atenda o seguinte pedido {$this->question}."
            );

        $this->config = $result->text();

        $this->config = preg_replace("/\n|```|json/", "", $this->config);
        $this->config = json_decode($this->config, true);

        $this->dataset = ["values" => SalesCommission::inRandomOrder()->limit(100)->get()->toArray()];

        return $this->config;
    }
}
