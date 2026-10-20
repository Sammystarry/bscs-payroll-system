<?php

use App\Models\User;
use App\Models\Employee;
use App\Models\PayrollPeriod;
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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employee:: class, 'employee_id')
                ->constrained('employees')->cascadeOnDelete();
            $table->foreignIdFor(PayrollPeriod:: class, 'payroll_period_id')
                ->constrained('payroll_periods')->cascadeOnDelete();
            $table->foreignIdFor(User:: class, 'user_id')
                ->constrained('users')->cascadetOnDelete();
            $table->decimal('gross_pay', 10, 2);
            $table->decimal('total_deductions', 10, 2)->default(0);
            $table->decimal('net_pay', 10, 2);
            $table->timestamp('date_processed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
