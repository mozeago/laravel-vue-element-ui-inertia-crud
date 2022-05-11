  <template>
  <el-aside>
    <el-scrollbar>
      <el-menu>
        <el-sub-menu index="1">
          <template #title>
            <el-icon><message></message></el-icon>Patient Management
          </template>
          <el-menu-item-group>
            <el-menu-item>
              <el-link href="{{ route('patient.index') }}"
                >Register/Revisit</el-link
              >
            </el-menu-item>
            <el-menu-item>Diagnose </el-menu-item>
            <el-menu-item>Prescription </el-menu-item>
            <el-menu-item>Billing records </el-menu-item>
            <el-menu-item>Reports</el-menu-item>
            <el-menu-item>Schedule Appointment </el-menu-item>
            <el-menu-item>Set/Send Reminders</el-menu-item>
            <el-menu-item>History</el-menu-item>
          </el-menu-item-group>
          <el-menu-item-group title="Inpatient">
            <el-menu-item>Attend</el-menu-item>
            <el-menu-item>Outpatient</el-menu-item>
          </el-menu-item-group>
        </el-sub-menu>
        <el-sub-menu index="2">
          <template #title>
            <el-icon><message></message></el-icon>Laboratory and Tests
            Management
          </template>
          <el-menu-item-group>
            <el-menu-item>Patient Test Results</el-menu-item>
            <el-menu-item>Attend to Patient</el-menu-item>
            <el-menu-item>Attend to Patient</el-menu-item>
          </el-menu-item-group>
        </el-sub-menu>
        <el-sub-menu index="3">
          <template #title>
            <el-icon><message></message></el-icon>Doctor Management
          </template>
          <el-menu-item-group>
            <el-menu-item>Register Doctors</el-menu-item>
            <el-menu-item>Doctors Report Details</el-menu-item>
            <el-menu-item>Attend to Patient</el-menu-item>
            <el-menu-item>Attend to Patient</el-menu-item>
          </el-menu-item-group>
        </el-sub-menu>
        <el-sub-menu index="4">
          <template #title>
            <el-icon><message></message></el-icon>Drugs Management
          </template>
          <el-menu-item-group>
            <el-menu-item>Add The List of Drugs</el-menu-item>
            <el-menu-item>Drugs for a Specific Patient</el-menu-item>
            <el-menu-item>List of Available Drugs</el-menu-item>
            <el-menu-item>Inventory</el-menu-item>
          </el-menu-item-group>
        </el-sub-menu>
        <el-sub-menu index="5">
          <template #title>
            <el-icon><message></message></el-icon>Online Appointment Management
          </template>
          <el-menu-item-group>
            <el-menu-item>Get online Appointment</el-menu-item>
            <el-menu-item>Status of Appointment</el-menu-item>
            <el-menu-item>Send Updates via SMS or Email</el-menu-item>
          </el-menu-item-group>
        </el-sub-menu>
        <el-sub-menu index="6">
          <template #title>
            <el-icon><message></message></el-icon>Invoice System
          </template>
          <el-menu-item-group>
            <el-menu-item>Generate </el-menu-item>
            <el-menu-item>Payment Status</el-menu-item>
          </el-menu-item-group>
        </el-sub-menu>
        <el-sub-menu index="7">
          <template #title>
            <el-icon><message></message></el-icon>Medical Services System
          </template>
          <el-menu-item-group>
            <el-menu-item>Add a List of Services </el-menu-item>
            <el-menu-item>Payment Status</el-menu-item>
          </el-menu-item-group>
        </el-sub-menu>
      </el-menu>
    </el-scrollbar>
  </el-aside>
</template>
  <script>
export default {
  name: "ElSideMenu",
};
</script>
