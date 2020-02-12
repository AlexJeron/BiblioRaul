data-id="{{ $atividade->id }}"
data-nome="{{ $atividade->nome }}"
data-inicio="{{ $atividade->inicio->format('Y-m-d\TH:i') }}"
data-fim="{{ optional($atividade->fim)->format('Y-m-d\TH:i') }}"
data-local_id="{{ $atividade->local->id }}"
data-local_nome="{{ $atividade->local->nome }}"
data-total_espectadores="{{ $atividade->total_espectadores }}"
data-outros_espectadores="{{ $atividade->outros_espectadores }}"
data-professores="{{ $atividade->professores }}"
data-turmas="{{ $atividade->turmas }}"
@isset($atividade->recurso)
data-recurso_id="{{ $atividade->recurso->id }}"
data-recurso_nome="{{ $atividade->recurso->nome }}"
data-num_recursos="{{ $atividade->num_recursos }}"
@endisset
data-observacao="{{ $atividade->observacao }}"
data-user_id="{{ $atividade->user->id }}"
data-user_name="{{ $atividade->user->nome }}" data-toggle="modal"
