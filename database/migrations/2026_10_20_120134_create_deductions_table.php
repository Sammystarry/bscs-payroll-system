<?php

use App\Models\Payroll;
use App\Models\ContributionRate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Payroll:: class, 'payroll_id')
                ->constrained('payrolls')->cascadeOnDelete();
            $table->foreignIdFor(ContributionRate:: class, 'contribution_rate_id')
                ->constrained('contribution_rates')->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deductions');
    }
};
