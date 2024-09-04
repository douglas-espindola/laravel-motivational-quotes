<?php

namespace DouglasSpindola\LaravelInspiringQuotes;

use Illuminate\Support\Collection;

    /*
     _____       _           _       _       _____        __ _
    /  ___|     (_)         | |     | |     /  ___|      / _| |
    \ `--. _ __  _ _ __   __| | ___ | | __ _\ `--.  ___ | |_| |_
     `--. \ '_ \| | '_ \ / _` |/ _ \| |/ _` |`--. \/ _ \|  _| __|
    /\__/ / |_) | | | | | (_| | (_) | | (_| /\__/ / (_) | | | |_
    \____/| .__/|_|_| |_|\__,_|\___/|_|\__,_\____/ \___/|_|  \__|
          | |
          |_|
    */

class Inspiring
{
    /**
     * @return mixed
     */
    public static function quoteInPortuguese(): mixed
    {
        return self::quotes()
            ->map(fn($quote) => self::formatForConsole($quote))
            ->random();
    }

    /**
     * @return Collection
     */
    protected static function quotes(): Collection
    {
        return Collection::make([
            'Aja apenas segundo uma máxima tal que você possa, ao mesmo tempo, querer que ela se torne uma lei universal. - Immanuel Kant',
            'Uma vida não examinada não vale a pena ser vivida. - Sócrates',
            'Esteja presente acima de tudo. - Naval Ravikant',
            'Faça o que você pode, com o que você tem, onde você está. - Theodore Roosevelt',
            'A felicidade não é algo pronto. Ela vem de suas próprias ações. - Dalai Lama',
            'Aquele que está contente é rico. - Laozi',
            'Começo a falar apenas quando tenho certeza de que o que direi não é melhor deixar não dito. - Catão, o Jovem',
            'Eu não falhei. Só descobri 10.000 maneiras que não funcionam. - Thomas Edison',
            'Se você não tem um objetivo consistente na vida, não pode vivê-la de maneira consistente. - Marco Aurélio',
            'Nunca é tarde para ser o que você poderia ter sido. - George Eliot',
            'Não é o homem que tem pouco, mas o homem que deseja mais, que é pobre. - Sêneca',
            'É a qualidade, e não a quantidade, que importa. - Lúcio Aneu Sêneca',
            'Saber não é suficiente; devemos aplicar. Estar disposto não é suficiente; devemos fazer. - Leonardo da Vinci',
            'Deixe que todas as suas coisas tenham seus lugares; que cada parte do seu negócio tenha seu tempo. - Benjamin Franklin',
            'Viva como se fosse morrer amanhã. Aprenda como se fosse viver para sempre. - Mahatma Gandhi',
            'Sem palavras supérfluas ou ações desnecessárias. - Marco Aurélio',
            'Nada que vale a pena ter vem fácil. - Theodore Roosevelt',
            'Ordene sua alma. Reduza seus desejos. - Agostinho',
            'As pessoas encontram prazer de diferentes maneiras. Eu encontro em manter minha mente clara. - Marco Aurélio',
            'A simplicidade é um gosto adquirido. - Katharine Gerould',
            'A simplicidade é a consequência de emoções refinadas. - Jean D\'Alembert',
            'A simplicidade é a essência da felicidade. - Cedric Bledsoe',
            'A simplicidade é o último grau de sofisticação. - Leonardo da Vinci',
            'Sorria, respire e vá devagar. - Thich Nhat Hanh',
            'A única maneira de fazer um ótimo trabalho é amar o que você faz. - Steve Jobs',
            'Todo o futuro está na incerteza: viva imediatamente. - Sêneca',
            'Muito pouco é necessário para uma vida feliz. - Marco Aurélio',
            'Não perca mais tempo discutindo o que um bom homem deveria ser, seja um. - Marco Aurélio',
            'Bem começado é metade feito. - Aristóteles',
            'Quando não há desejo, todas as coisas estão em paz. - Laozi',
            'Ande como se estivesse beijando a Terra com seus pés. - Thich Nhat Hanh',
            'Porque você está vivo, tudo é possível. - Thich Nhat Hanh',
            'Respirando, acalmo o corpo e a mente. Exalando, sorrio. - Thich Nhat Hanh',
            'A vida só está disponível no momento presente. - Thich Nhat Hanh',
            'A melhor maneira de cuidar do futuro é cuidar do momento presente. - Thich Nhat Hanh',
            'Nada na vida deve ser temido, apenas compreendido. Agora é o momento de entender mais, para que possamos temer menos. - Marie Curie',
            'A maior batalha é a guerra contra a ignorância. - Mustafa Kemal Atatürk',
            'Sempre lembre-se de que você é absolutamente único. Assim como todo mundo. - Margaret Mead',
            'Você deve ser a mudança que deseja ver no mundo. - Mahatma Gandhi',
            'Sábio é o homem que conhece os próprios limites - John Clair'
        ]);
    }

    /**
     * @param string $quote
     * @return string
     */
    protected static function formatForConsole(string $quote): string
    {
        [$text, $author] = str($quote)->explode('-');

        return sprintf(
            "\n  “%s”\n  — %s\n",
            trim($text),
            trim($author),
        );
    }
}