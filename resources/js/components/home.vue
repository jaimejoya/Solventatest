<template>
  <div class="dashboard">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-dark py-2 px-3">
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <WrenchIcon class="icon me-2" />
          <span class="navbar-brand mb-0 h1">Solventa</span>
        </div>
        
        <div class="search-container flex-grow-1 mx-4">
          <input 
            type="text" 
            class="form-control search-input" 
            placeholder="Buscar orden"
          />
        </div>
        
        <div class="d-flex align-items-center gap-3">
          <ShareIcon class="action-icon" />
          <MailIcon class="action-icon" />
          <BellIcon class="action-icon" />
          <Settings2Icon class="action-icon" />
          <div class="avatar">A</div>
        </div>
      </div>
    </nav>

    <!-- Grid Layout -->
    <div class="container py-4">
      <div class="row g-4">
        <!-- New Item Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-new h-100">
            <div class="card-body d-flex align-items-center justify-content-center">
              <PlusIcon class="plus-icon" />
            </div>
          </div>
        </div>

        <!-- Presupuestos Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-budget h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <FileTextIcon class="card-icon mb-2" />
              <span class="card-title">Presupuestos</span>
            </div>
          </div>
        </div>

        <!-- Órdenes Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-orders h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <ClipboardIcon class="card-icon mb-2" />
              <span class="card-title">Órdenes</span>
            </div>
          </div>
        </div>

        <!-- Ventas Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-sales h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <StoreIcon class="card-icon mb-2" />
              <span class="card-title">Ventas</span>
            </div>
          </div>
        </div>

        <!-- Agenda Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-agenda h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <CalendarIcon class="card-icon mb-2" />
              <span class="card-title">Agenda</span>
            </div>
          </div>
        </div>

        <!-- Equipos Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-equipment h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <LaptopIcon class="card-icon mb-2" />
              <span class="card-title">Equipos</span>
            </div>
          </div>
        </div>

        <!-- Clientes Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-clients h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <Users2Icon class="card-icon mb-2" />
              <span class="card-title">Clientes</span>
            </div>
          </div>
        </div>

        <!-- Productos Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-products h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <ShoppingBagIcon class="card-icon mb-2" />
              <span class="card-title">Productos</span>
            </div>
          </div>
        </div>

        <!-- Servicios Card -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-services h-100">
            <div class="card-body d-flex flex-column align-items-center justify-content-center">
              <WrenchIcon class="card-icon mb-2" />
              <span class="card-title">Servicios</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { 
  WrenchIcon, 
  ShareIcon, 
  MailIcon, 
  BellIcon, 
  Settings2Icon,
  PlusIcon,
  FileTextIcon,
  ClipboardIcon,
  StoreIcon,
  CalendarIcon,
  LaptopIcon,
  Users2Icon,
  ShoppingBagIcon
} from 'lucide-vue-next'
</script>

<style scoped>
/* Add Bootstrap CSS */
@import 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';

.dashboard {
  min-height: 100vh;
  background-color: #1a2332;
}

.navbar {
  background-color: #1a2332;
}

.search-container {
  max-width: 600px;
}

.search-input {
  background-color: #2a3444;
  border: none;
  color: white;
}

.search-input:focus {
  background-color: #2a3444;
  color: white;
  box-shadow: none;
}

.icon {
  width: 24px;
  height: 24px;
  color: white;
}

.action-icon {
  width: 20px;
  height: 20px;
  color: #6c757d;
  cursor: pointer;
}

.avatar {
  width: 32px;
  height: 32px;
  background-color: #4287f5;
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.card {
  border: none;
  border-radius: 0.5rem;
  aspect-ratio: 1;
  cursor: pointer;
  transition: opacity 0.2s;
}

.card:hover {
  opacity: 0.9;
}

.card-new {
  background-color: white;
}

.card-budget {
  background-color: #ffd645;
}

.card-orders {
  background-color: #ff7b7b;
}

.card-sales {
  background-color: #4287f5;
}

.card-agenda {
  background-color: #ffebeb;
}

.card-equipment {
  background-color: #ff7b3a;
}

.card-clients {
  background-color: #4cd964;
}

.card-products {
  background-color: #ff4d94;
}

.card-services {
  background-color: #4287f5;
}

.plus-icon {
  width: 32px;
  height: 32px;
  color: #4287f5;
}

.card-icon {
  width: 32px;
  height: 32px;
  color: white;
}

.card-title {
  color: white;
  font-weight: 500;
}

.card-agenda .card-icon,
.card-agenda .card-title {
  color: #1a2332;
}
</style>