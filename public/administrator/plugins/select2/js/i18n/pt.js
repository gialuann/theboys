viders Operation="Add">
                        <EventProviderId Value="EventProvider_AM_Engine" />
                    </EventProviders>
                </EventCollectorId>
            </Collectors>
        </Profile>
    </Profiles>

    <TraceMergeProperties>
        <TraceMergeProperty  Id="Default" Name="Default" Base="">
            <DeletePreMergedTraceFiles Value="true"/>
            <FileCompression Value="true"/>
            <CustomEvents>
                <CustomEvent Value="ImageId"/>
                <CustomEvent Value="BuildInfo"/>
                <CustomEvent Value="VolumeMapping"/>
                <CustomEvent Value="EventMetadata"/>
                <CustomEvent Value="WinSAT"/>
                <CustomEvent Value="NetworkInterface"/>
            </CustomEvents>
        </TraceMergeProperty>
    </TraceMergeProperties>

</WindowsPerformanceRecorder>
   