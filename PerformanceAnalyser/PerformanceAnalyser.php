<?php

namespace utils\dev;

/**
 * Exemplo de Uso:
 * PerformanceAnalyser::Start();
 * // my code
 * PerformanceAnalyser::Finish();
 */
class PerformanceAnalyser {

    private static $initialUsageMemory;
    private static $peakUsageMemory;
    private static $finalUsageMemory;
    private static $initialTime;
    private static $finalTime;

    public static function Start() {
        self::$initialUsageMemory = memory_get_usage() / 1000000;
        self::$initialTime = microtime(true);
    }

    public static function Finish($printContent = true) {
        self::$finalTime = microtime(true);
        self::$peakUsageMemory = memory_get_peak_usage() / 1000000;
        self::$finalUsageMemory = memory_get_usage() / 1000000;
        $totalTime = self::$finalTime - self::$initialTime;
        if ($printContent) {
            $result = "Uso Inicial de Memória: " . self::$initialUsageMemory . "MBs<br>Pico de Uso de"
                . " Memória: " . self::$peakUsageMemory . " MBs<br>Uso de Memória ao Final: "
                . self::$finalUsageMemory . "MBs<br> Tempo de execução: " . $totalTime . " segundos";
            echo $result;
        } else {
            $result = "Uso Inicial de Memória: " . self::$initialUsageMemory . " MBs" . PHP_EOL . "Pico de Uso de"
                . " Memória: " . self::$peakUsageMemory . " MBs" . PHP_EOL . "Uso de Memória ao Final: "
                . self::$finalUsageMemory . " MBs" . PHP_EOL . " Tempo de execução: " . $totalTime . " segundos";
            file_put_contents(SYSTEM_DIR . "tmp/performance.txt",
                file_get_contents(SYSTEM_DIR . "/tmp/performance.txt")
                . PHP_EOL
                . "Dados da Performance:"
                . PHP_EOL
                . print_r($result, true)
                . PHP_EOL);
        }
    }

}
